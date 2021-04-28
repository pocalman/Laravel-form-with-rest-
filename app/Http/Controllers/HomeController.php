<?php

namespace App\Http\Controllers;

use Theme;
use Illuminate\Http\Request;
use App\Services\Directus;

class HomeController extends Controller
{

    public $limit;
    public $productionsByCategoryCollection;

    public function __construct(Request $request, Directus $dapi)
    {
        $this->limit = $request->route('limit');
        if ($this->limit === null) $this->limit = 1;
        $this->featuredProductions = $dapi->featuredProductions();
        $this->productionTypes = $dapi->productionTypes(null, 'NUMÉRIQUE');
        $this->dapi = $dapi;
        $this->productionsByCategoryCollection = [];
    }

    function show()
    {
        return view('home', [
            'categories' => $this->assignProductionsToCategories(),
            'limit' => $this->limit + 1,
            'featuredCards' => $this->featuredProductions
        ]);
    }

    function assignProductionsToCategories() {
        foreach( $this->productionTypes as $productionType ) {
            $this->productionsByCategoryCollection[$productionType['titre']] = [
                'titre' => $productionType['titre'],
                'slug' => $productionType['slug'],
                'cards' => $this->dapi->productionsByCategory($productionType['id'])
            ];
        }
        return $this->productionsByCategoryCollection;
    }
}
