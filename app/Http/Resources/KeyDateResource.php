<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KeyDateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->prepareKeyDates();
    }

    private function prepareKeyDates() {
        $statesCollection = collect([
            'projet' => 'Projet',
            'preproduction' => 'Préproduction',
            'production' => 'Production',
            'postproduction' => 'Postproduction',
            'termine' => 'Terminé',
            'Année production' => 'Année production',
            'Année sortie' => 'Année sortie',
            'annee_production' => 'Année production',
            'annee_sortie' => 'Année sortie',
        ]);

        $keyDates = collect([]);

        $statesCollection->each(function($item, $key) use(&$keyDates) {
            if( collect($this->resource)->has($key) && $item != '' ) {
                $keyDates->put($key, $this->resource[$key]);
            }
            else {
                // $keyDates->put($key, null); //todo: make sure it's not used.
            }
        });

        return $keyDates->toArray();
    }

}