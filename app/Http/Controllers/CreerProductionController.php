<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Directus;

class CreerProductionController extends Controller
{
    private $dapi;

    public function __construct(Request $request, Directus $dapi)
    {
        $this->dapi = $dapi;
    }

    public function show()
    {
        return view('creerProduction', [
            'genres' => $this->getGenres(),
            'types' => $this->getTypes(),
            'secteurs' => $this->getSecteurs(),
            'formats' => $this->getFormats()
        ]);
    }

    private function getGenres()
    {
        return $this->dapi->genres();
    }

    private function getTypes()
    {
        return $this->dapi->productionTypes(null, 'NUMÉRIQUE');
    }

    // temporaire, à remplacer par un call vers l'api si un jour secteur devient une table
    private function getSecteurs()
    {
        return [
            ['titre' => 'film'],
            ['titre' => 'television'],
            ['titre' => 'multimedia']
        ];
    }

    // temporaire, à remplacer par un call vers l'api si un jour secteur devient une table
    private function getFormats()
    {
        return [
            ['titre' => '1" 3/4"'],
            ['titre' => '16 mm'],
            ['titre' => '2K'],
            ['titre' => '35 mm'],
            ['titre' => '3D'],
            ['titre' => '3D IMAX'],
            ['titre' => 'Betacam'],
            ['titre' => 'Betacam numérique'],
            ['titre' => 'Betacam SP'],
            ['titre' => 'Console de jeu'],
            ['titre' => 'DVCam'],
            ['titre' => 'DVCPro'],
            ['titre' => 'DVD'],
            ['titre' => 'FLASH'],
            ['titre' => 'Game Boy Advance'],
            ['titre' => 'HDCam'],
            ['titre' => 'HTML'],
            ['titre' => 'IMAX'],
            ['titre' => 'Irix'],
            ['titre' => 'Jeu électronique'],
            ['titre' => 'Linux'],
            ['titre' => 'Mac'],
            ['titre' => 'Mac/PC'],
            ['titre' => 'Mini DV'],
            ['titre' => 'Palm OS'],
            ['titre' => 'PC'],
            ['titre' => 'PlayStation'],
            ['titre' => 'Playstation 2'],
            ['titre' => 'Pocket PC'],
            ['titre' => 'Produit logiciel'],
            ['titre' => 'SGI'],
            ['titre' => 'Shockwave'],
            ['titre' => 'SmartPhone'],
            ['titre' => 'Super 16 mm'],
            ['titre' => 'Super 35 mm'],
            ['titre' => 'Super 8 mm'],
            ['titre' => 'VHS NTSC'],
            ['titre' => 'Vidéo'],
            ['titre' => 'Vidéo HD'],
            ['titre' => 'Vidéo numérique'],
            ['titre' => 'Vidéo Web'],
            ['titre' => 'Windows'],
            ['titre' => 'XBox'],
        ];
    }

    public function createProduction(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        //     "production" => 'required',
        //     "titre" => 'required',
        //     "secteur" => 'required',
        //     "date-fin-projet" => 'required',
        //     "date-fin-preprod" => 'required',
        //     "date-fin-prod" => 'required',
        //     "date-fin-postprod" => 'required',
        //     "date-fin" => 'required',
        //     "type" => 'required',
        //     "genre" => 'required',
        //     "episodes" => '',
        //     "duree" => '',
        //     "tournage" => '',
        //     "format" => '',
        //     "contact" => 'required',
        //     "email" => 'required',
        //     "telephone" => 'required',
        //     "telecopieur" => '',
        //     "synopsis" => '',
        //     "note" => ''
        // ]);
        $this->dapi->createProduction($request->all());
        return view('confirmCreationProduction');
    }
}
