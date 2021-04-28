<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiffusionResource extends JsonResource
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
            'titre' => isset($this->resource['Titre']) ? $this->resource['Titre'] : null,
            'url' => isset($this->resource['URL']) ? $this->resource['URL'] : null,
            'date' => isset($this->resource['diffusion']) ? $this->resource['diffusion'] : null
        ];
    }
}
