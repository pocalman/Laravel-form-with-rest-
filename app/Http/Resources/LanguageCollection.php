<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class LanguageCollection extends ResourceCollection
{
    public $languages;

    public function __construct($resource) {
        parent::__construct($resource);
        $this->languages = collect([
            'doublage' => [],
            'vo' => [],
            'sous-titres' => []
        ]);
    }
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $originalCollection = collect(LanguageResource::collection($this->collection)->resolve());

        $filteredCollection = ($this->languages)->toArray();

        $originalCollection->each(function($item, $key) use(&$filteredCollection) {
            $this->languages->each(function($itemL, $keyL) use(&$filteredCollection, &$item) {
                if( collect($item['types'])->contains($keyL) ) {
                    array_push($filteredCollection[$keyL], $item['label']);
                }
            });
        });

        return $filteredCollection;

    }



}