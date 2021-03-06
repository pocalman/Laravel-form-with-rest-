<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductionCollection extends ResourceCollection
{


  /**
   * Transform the resource collection into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    $this->productions = collect(ProductionResource::collection($this->collection)->resolve());
    return $this->productions;
  }
}