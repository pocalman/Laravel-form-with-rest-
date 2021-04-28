<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GeneriqueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'type_generique' => isset($this->resource['type_generique']['titre']) ? $this->resource['type_generique']['titre'] : null,
            'categorie_generique' => isset($this->resource['categorie_generique']['categorie']) ? $this->resource['categorie_generique']['categorie'] : null,
            'nom' => $this->resource['entite'] ? $this->resource['entite']['nom'] : null,
            'url' => (isset($this->resource['entite']['web']) && strlen($this->resource['entite']['web']) > 0 ) ? preg_replace('/^(http:\/\/)?(.+)/i', 'http://$2', $this->resource['entite']['web']) : null,
            'entreprise' => $this->resource['entite_liee'] ? $this->resource['entite_liee']['nom'] : null,
            'url_entreprise' => (isset($this->resource['entite_liee']['web']) && strlen($this->resource['entite_liee']['web']) > 0 )? preg_replace('/^(http:\/\/)?(.+)/i', 'http://$2', $this->resource['entite_liee']['web']) : null,
            'role' => $this->resource['categorie_generique'] ? $this->resource['categorie_generique']['categorie'] : null,
            'type_entite' => $this->resource['entite'] ? $this->resource['entite']['type_entite'] : null,
            'entete' => $this->resource['categorie_generique'] ? $this->resource['categorie_generique']['entete'] : null
        ];
    }
}
