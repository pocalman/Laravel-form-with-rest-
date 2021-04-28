<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Directus;
use Theme;

class RechercheController extends Controller
{

    public $q;

    function __construct(Request $request, Directus $dapi) {
        $this->limit = ($request->input('limit') !== null) ? $request->input('limit') : 1;
        $this->q = $request->input('q');
        $this->categorie = $request->input('categorie');
        $this->clientele = $request->input('clientele');
        $this->genre = $request->input('genre');
        $this->rechercheProductions = $dapi->rechercheProductions($this->q, $this->limit, $this->categorie, $this->clientele, $this->genre);
    }

    function show() {
        return view('recherche', [
            'cards' => $this->rechercheProductions,
            'q' => $this->q,
            'limit' => $this->limit,
            'categorie' => $this->categorie,
            'clientele' => $this->clientele,
            'genre' => $this->genre,
            'showMoreBtn' => true //todo: dynamise this
        ]);
    }

}
