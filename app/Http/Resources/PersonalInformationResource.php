<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalInformationResource extends JsonResource
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
            "id_card" => $this->id_card,
            "nik_ktp" => $this->nik_ktp,
            "bio" => $this->bio,
            "phone_number" => $this->phone_number,
            "gender" => $this->gender,
            "place_of_birth" => $this->place_of_birth,
            "date_of_birth" => $this->date_of_birth,
            "company_name" => $this->company_name,
            "company_logo" => $this->company_logo,
            "siupsku_number" => $this->siupsku_number,
            "siupsku_image" => $this->siupsku_image,
            "area" => $this->area,
            "region" => $this->region,
        ];
    }
}
