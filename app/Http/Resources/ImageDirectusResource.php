<?php

namespace App\Http\Resources;

use App\Http\Resources\ImageLegacyResource;

class ImageDirectusResource extends ImageLegacyResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    // dd($this->resource);
    $obj = [
      'titre' => $this->resource['directus_files_id']['title'],
      'description' => $this->resource['directus_files_id']['description'],
      'url' => $this->resource['directus_files_id']['data']['full_url'],
      'width' => $this->resource['directus_files_id']['width'],
      'height' => $this->resource['directus_files_id']['height'],
      'numero_image' => $this->resource['sort_img']
    ];
    if(isset($this->resource['directus_files_id']['metadata']) && isset($this->resource['directus_files_id']['metadata']['credit'])){
      $obj['credit'] = $this->resource['directus_files_id']['metadata']['credit'];
    }else{
      $obj['credit'] = '';
    }
    return $obj;
  }

  private static function checkIsNull($key, $default = null) {
    if(is_null($key)) return $default;
    return $key;
  }
}
