<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class GeneriqueCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $originalCollection = collect(GeneriqueResource::collection($this->collection)->resolve());

        $filteredCollection = [];

        $originalCollection->each(function($item, $key) use(&$filteredCollection) {
            $filteredCollection[$item['type_generique']][] = $item;
        });

        return $filteredCollection;

    }

    // private function getUniqueCategories() {
    //     return collect($this->collection)->unique('type_generique.titre')->map(function ($item) {
    //         return $item['type_generique']['titre'];
    //     })->toArray();
    // }
}
