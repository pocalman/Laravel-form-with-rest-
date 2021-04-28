<?php
// src: https://github.com/jsiebach/moz-local/blob/master/src/MozLocal.php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Http\Resources\ProductionResource;
use App\Http\Resources\ProductionCollection;

class Directus
{

    private $access_token;
    private $api_base_url;

    public function __construct()
    {
        $this->access_token = env('DIRECTUS_API_TOKEN');
        $this->api_base_url = env('DIRECTUS_API_BASE_URL');
    }

    public function getApiBaseUrl()
    {
        return $this->api_base_url . "/";
    }

    public function call(string $endpoint, array $params = [], string $method = 'get', $db = null)
    {
        $db = isset($db) ? $db : env('DIRECTUS_API_APP_NAME', 'dge');
        $data = json_decode(
            Http::withToken($this->access_token)->{$method}(
                $this->api_base_url . '/' . $db . '/' . $endpoint,
                $params
            )
            , true
        );
        // return ProductionResource::make($data['data'])->resolve();
        return $data;
        //		try {
        //
        //		}
        //		catch (ClientException $exception) {
        //			$responseBody = $exception->getResponse()->getBody(true);
        //			return $responseBody;
        //		} catch (GuzzleException $exception) {
        //			$responseBody = $exception->getResponse()->getBody(true);
        //			return $responseBody;
        //		}
    }

    public function singleProduction(int $id = null) {
        $params = [
            "fields" => '
                id,
                titre,
                titre_travail,
                sujet,
                presentation,
                nbr_episodes,
                duree,
                clientele,
                budget,
                type_production.*,
                format,
                timeline,
                dates_timeline,
                dates_production,
                languages.*,
                status,
                diffusions.*,
                copro_requested,
                copro.*,
                fichiers.directus_files_id.data.full_url,
                fichiers.directus_files_id.metadata.credit,
                fichiers.directus_files_id.title,
                fichiers.directus_files_id.description,
                fichiers.directus_files_id.width,
                fichiers.directus_files_id.height,
                fichiers.directus_files_id.id,
                fichiers.sort_img,
                genres.genres_id.*,
                copro.entites_id.*,
                generiques.*.*,
                imgs.*,
                contact_infos
            '
        ];
        $data = $this->call('items/productions' . (is_numeric($id) ? '/'.$id : ''), $params);
        return isset($data['data']) ? ProductionResource::make($data['data'])->resolve() : abort($data['error']['code'], $data['error']['message']);
    }

    public function productionsByCategory($category = null, $limit = 10) {
        $params = [
            "limit" => $limit,
            "fields" => '
                id,
                titre,
                status,
                imgs.logos_et_images__url,
                imgs.numero_image,
                fichiers.directus_files_id.data.full_url,
                fichiers.directus_files_id.metadata.credit,
                fichiers.directus_files_id.title,
                fichiers.directus_files_id.description,
                fichiers.directus_files_id.width,
                fichiers.directus_files_id.height,
                fichiers.directus_files_id.id,
                fichiers.sort_img,
                timeline,
                type_production.titre,
                type_production.slug,
                generiques.*.*,
                regie_vedette.*
            ',
            "sort" => "-qfq_id,-id",
            "filter[type_production.id][eq]" => $category,
            "filter[status][eq]" => 'published'
        ];
        $data = $this->call('items/productions', $params);
        $params["filter[regie_vedette.afficher][contains]"] = 'accueil';
        $params["filter[regie_vedette.date_fin][gte]"] = date('Y-m-d');
        $params["filter[regie_vedette.date_debut][lte]"] = date('Y-m-d');
        $vedette = $this->call('items/productions', $params);
        return isset($data['data']) ? collect(ProductionCollection::make(array_merge($vedette['data'], $data['data']))->resolve())->filter(function ($item, $index) {
            return count($item['images']) > 0;
        })->unique()->forPage(1, 3) : [];
    }

    public function featuredProductions(int $id = null) {
        $params = [
            'limit' => 6,
            'sort'=> '?',
            "fields" => '
                *.*,
                productions_item.id,
                productions_item.titre,
                productions_item.status,
                productions_item.imgs.logos_et_images__url,
                productions_item.fichiers.directus_files_id.data.full_url,
                productions_item.fichiers.directus_files_id.metadata.credit,
                productions_item.fichiers.directus_files_id.title,
                productions_item.fichiers.directus_files_id.description,
                productions_item.fichiers.directus_files_id.width,
                productions_item.fichiers.directus_files_id.height,
                productions_item.fichiers.directus_files_id.id,
                productions_item.fichiers.sort_img,
            ',
            "filter[afficher][contains]" => 'bandeau',
            "filter[date_fin][gte]" => date('Y-m-d'),
            "filter[date_debut][lte]" => date('Y-m-d'),
            "filter[productions_item.status][eq]" => 'published'
        ];
        $data = $this->call('items/regie_vedettes' . (is_numeric($id) ? '/'.$id : ''), $params);
        return isset($data['data']) ? ProductionCollection::make(collect($data['data'])->map(function ($item, $key) {
            return $item['productions_item'];
        }))->resolve() : [];
    }

    public function productionTypes(int $id = null, $secteur = null) {
        $params = [
            'filter[secteurs][eq]' => $secteur,
            'sort' => 'sort'
        ];
        // if (isset($secteur)) {
        //     $params["filter[secteurs][eq]"] = $secteur;
        // }
        $data = $this->call('items/type_prod' . (is_numeric($id) ? '/'.$id : ''), $params);
        return isset($data['data']) ? $data['data'] : [];
    }

    public function genres($secteur = null) {
        $params = [
            'filter[secteurs][contains]' => $secteur,
            'sort' => 'titre'
        ];
        // if (isset($secteur)) {
        //     $params["filter[secteurs][contains]"] = $secteur;
        // }
        $data = $this->call('items/genres', $params);
        return isset($data['data']) ? $data['data'] : [];
    }

    public function rechercheProductions($q = null, $limit = 1, $categorie = null, $clientele = null, $genre = null) {
        if( $q == null && $categorie == null && $clientele == null && $genre == null ) return [];
        $params = [
            "q" => $q,
            "sort" => "-qfq_id,-id",
            'fields' => '
                id,
                titre,
                imgs.logos_et_images__url,
                imgs.numero_image,
                fichiers.directus_files_id.data.full_url,
                fichiers.directus_files_id.metadata.credit,
                fichiers.directus_files_id.title,
                fichiers.directus_files_id.description,
                fichiers.directus_files_id.width,
                fichiers.directus_files_id.height,
                fichiers.directus_files_id.id,
                fichiers.sort_img,
                timeline,
                type_production.*,
                clientele,
                genres,
                generiques.*.*
            ',
            "filter[status][eq]" => 'published'
        ];
        if(isset($clientele)){
            $params['filter[clientele][like]'] = $clientele;
        }
        if(isset($genre)){
            $params['filter[genres.genres_id.slug][like]'] = $genre;
        }
        if(isset($categorie)){
            $params['filter[type_production.slug][eq]'] = $categorie;
        }

        // todo: add call to count total result for pagination
        $params['limit'] = 15 * $limit;

        $data = $this->call('items/productions', $params);
        return isset($data['data']) ? ProductionCollection::make($data['data'])->resolve() : [];
    }

    public function createProduction($params) {
        $to = env('MAIL_PROD_CREATE', 'stephane@noeme.ca');
        $email_from = 'redacteur@lienmultimedia.com';
        $email_subject = "Nouveau projet soumis sur collection.lienmultimedia.com";
        $email_body = "<html><head>Nouveau projet soumis sur collection.lienmultimedia.com</head><body>"
                    ."<h1>".$params['titre']."</h1>"
                    ."<p>".preg_replace('/([,\{\}]{1})"/i', '$1<br/>"',json_encode($params)) ."</p>"
                    ."</body></html>";

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = "To: $to";
        $headers[] = "From: $email_from";
        $headers[] = "Reply-To: $email_from";
        mail($to,$email_subject,$email_body,implode("\r\n", $headers));

        // $params = [
        //     'filter[secteurs][contains]' => $secteur,
        //     'sort' => 'titre'
        // ];
        // $data = $this->call('items/production', $params, 'post', 'dev_dge');
        // dd($data);
        // return isset($data['data']) ? $data['data'] : [];
        return null;
    }
}