<?php
// doc : https://medium.com/@jeffochoa/consuming-third-pary-apis-with-laravel-resources-c13a0c7dc945
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\DiffusionCollection;
use App\Http\Resources\DiffusionResource;

class ProductionResource extends JsonResource
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
        // dd( (DiffusionResource::collection($this->resource['diffusions']))->resolve()  );
        $production = [];
        $production['id'] = isset($this->resource['id']) ? $this->resource['id'] : '';
        $production['titre'] = isset($this->resource['titre']) ? $this->resource['titre'] : '';
        $production['contact'] = isset($this->resource['contact_infos']) ? $this->resource['contact_infos'] : '';
        $production['type'] = isset($this->resource["type_production"]) ? $this->resource["type_production"] : ['slug'=>'', 'titre'=>''];
        $production['duree'] = isset($this->resource['duree']) ? $this->resource['duree'] : '';
        $production['nbr_episodes'] = isset($this->resource['nbr_episodes']) ? $this->resource['nbr_episodes'] : '';
        $production['current_state'] = isset($this->resource['timeline']) ? $this->resource['timeline'] : '';
        $production['presentation'] = isset($this->resource['presentation']) ? $this->resource['presentation'] : '';
        $production['clientele'] = isset($this->resource['clientele']) ? $this->resource['clientele'] : '';
        $production['budget'] = isset($this->resource['budget']) ? $this->resource['budget'] : '';
        $production['genres'] = isset($this->resource['genres']) ? $this->resource['genres'] : '';
        $production['copros'] = isset($this->resource['copro']) ? $this->resource['copro'] : '';
        $production['copro_requested'] = isset($this->resource['copro_requested']) ? $this->resource['copro_requested'] : '';
        $production['website'] = '';
        $production['facebook'] = '';
        $production['twitter'] = '';
        $production['youtube'] = '';
        $production['vimeo'] = '';

        $production['diffusions'] = (DiffusionResource::collection(isset($this->resource['diffusions']) ? $this->resource['diffusions'] : []))->resolve();
        $production['languages'] = (new LanguageCollection(isset($this->resource['languages']) ? $this->resource['languages'] : []))->resolve();

        $production['key_dates'] = [];
        if( isset($this->resource['dates_production']) && $this->resource['dates_production'] !== null ) {
            $production['key_dates'] = KeyDateResource::make(self::checkIsNull($this->resource['dates_production'][0], []))->resolve();
        }

        $production['images'] = [];
        if(isset($this->resource['imgs'])) {
            $production['images'] = array_merge($production['images'], (ImageLegacyResource::collection(self::checkIsNull($this->resource['imgs'], [])))->resolve());
        }
        if(isset($this->resource['fichiers'])) {
            $production['images'] = array_merge($production['images'], (ImageDirectusResource::collection(self::checkIsNull($this->resource['fichiers'], [])))->resolve());
        }

        if(isset($this->resource['generiques'])) {
            $production['generiques'] = (new GeneriqueCollection($this->resource['generiques']))->resolve();
            $production['entetes'] = (new EnteteCollection($this->resource['generiques']))->resolve();
        }else{
            $production['entetes'] = (new EnteteCollection([]))->resolve();
            $production['generiques'] = (new GeneriqueCollection([]))->resolve();
        }

        $production['articles'] = [];
        return $production;
    }

    private static function checkIsNull($key, $default = null) {
        if(!isset($key) || is_null($key)) return $default;
        return $key;
    }
}
