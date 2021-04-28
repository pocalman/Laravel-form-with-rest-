<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Services\Directus;

class SingleController extends Controller
{
    public $id;
    private $dapi;

    public function __construct(Request $request, Directus $dapi)
    {
        $this->dapi = $dapi;
        $this->id = $request->route('slug');
    }

    public function show()
    {
        $single = $this->dapi->singleProduction($this->id);
        $searchParam = $this->setSearchParam($single['titre']);
        return view('single', [
            'single' => $single,
            'states' => $this->getState(),
            'searchParam' => $searchParam,
            'articles' => $this->getArticles(['searchParam' => $searchParam])
        ]);
    }

    private static function getState()
    {
        return ['projet' => 'Projet', 'preproduction' => 'Préproduction', 'production' => 'Production', 'postproduction' => 'Postproduction', 'termine' => 'Terminé'];
    }

    private function setSearchParam($searchParam='') {
        $searchParam = str_ireplace([' ','\'','"','.','[',']','(',')'], '+', $searchParam);
        $searchParam = str_ireplace(['+de+','+des+','+une+','+un+','+le+','+la+','+les+','+of+','+to+','+the+'] , '+', $searchParam);
        $searchParam = str_ireplace(['++'], '+', $searchParam);
        return $searchParam;
    }

    private function getArticles($params = [])
    {
        $articles = [];
        $responses = [];
        $searchesAttempts = [
            'production/'.$this->id,
            $params['searchParam'],
        ];

        foreach($searchesAttempts as $search) {
            $responses[] = Http::timeout(120)->get(
                'http://lienmultimedia.com/',
                [
                    'page' => 'recherche-2json',
                    'recherche' => $search,
                    'var_mode' => 'recalcul'
                ]
            );
        }

        foreach($responses as $response) {
            if ($response->successful() === true && isset($response->json()['articles'])) {
                $articles = array_merge($articles, $response->json()['articles']);
            }
        }

        foreach($articles as $article) {
            $article = [
                'points' => self::checkIsNull($article['points']),
                'id_article' => self::checkIsNull($article['id_article']),
                'titre' => self::checkIsNull($article['titre']),
                'url_article' => self::checkIsNull($article['url_article'])
            ];
        }
        $articles = collect($articles)->unique('id_article')->values()->all();
        return $articles;
    }

    private static function checkIsNull($key, $default = null) {
        if(is_null($key)) return $default;
        return $key;
    }
}
