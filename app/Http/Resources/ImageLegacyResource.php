<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageLegacyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'titre' => array_key_exists('description', $this->resource) ? $this->resource['description'] : '',
            'credit' => array_key_exists('credits_image', $this->resource) ? $this->resource['credits_image'] : '',
            'url' => array_key_exists('logos_et_images__url', $this->resource) ? $this->resource['logos_et_images__url'] : '',
            // 'url' => $this->resource['logos_et_images__thumburl'],
            // 'numero_image' => $this->resource['numero_image']
        ];
    }
}
