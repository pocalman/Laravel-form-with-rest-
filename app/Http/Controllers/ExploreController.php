<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Directus;
use Theme;

class ExploreController extends Controller

{

    public function __construct(Request $request, Directus $dapi)
    {
        $this->dapi = $dapi;
    }

    function show(Request $request)
    {
        return view('explore', [
            'genres' => $this->dapi->genres(Theme::getSetting('secteurs', null)),
            'categories' => $this->dapi->productionTypes(null, Theme::getSetting('secteurs', null))
        ]);
    }
}
