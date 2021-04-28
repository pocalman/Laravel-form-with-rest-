<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
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
            'label' => self::getLanguageName($this->resource['langue']),
            'types' => $this->resource['disponibilite']
        ];
    }

    private static function getLanguageName($code = null)
    {
        $language_code = substr($code, 0, 2);
        $language_label = '';
        $country_code = substr($code, -2, 2);
        $country_label = '';

        $language_data_array = array_filter(
            config('languages'),
            function ($item) use ($language_code) {
                return ($item['alpha2'] == $language_code);
            }
        );
        $language_label = current($language_data_array)['french'];

        if (strlen($code) === 5) {
            if (key_exists($country_code, config('countries'))) {
                $country_label = config('countries.' . $country_code);
            }
        }

        if ($country_label != '') return "{$language_label} ({$country_label})";
        return $language_label;
    }
}
