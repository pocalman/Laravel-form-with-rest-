<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EnteteCollection extends ResourceCollection
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

        $filteredCollection = $originalCollection->where('entete', true);

        return $filteredCollection;
    }
}
