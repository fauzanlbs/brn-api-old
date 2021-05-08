<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
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
            "title" => $this->title,
            "vesion_app" => $this->vesion_app,
            "copyright" => $this->copyright,
            "histories" => json_decode($this->history),
            "organizational_regulations" => json_decode($this->organizational_regulations),
            "tujuh_sapta_cipta" => json_decode($this->tujuh_sapta_cipta),
            "adarts" => json_decode($this->adart),
            "organizational_structures" => json_decode($this->organizational_structures),
            "playstore_url_app" => $this->playstore_url_app,
        ];
    }
}
