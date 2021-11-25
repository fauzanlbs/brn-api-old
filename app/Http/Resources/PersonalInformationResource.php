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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'id_card' => $this->id_card,
            'nik_ktp' => $this->nik_ktp,
            'bio' => $this->bio,
            'phone_number' => $this->phone_number,
            'gender' => $this->gender,
            'place_of_birth' => $this->place_of_birth,
            'date_of_birth' => $this->date_of_birth,
            'clothes_size' => $this->clothes_size,
            'number_of_units' => $this->number_of_units,
            'area_dialing_code' => $this->area_dialing_code,
            'area' => $this->area,
            'area_code' => $this->area_code,
            'region' => $this->region,
            'company_name' => $this->company_name,
            'company_logo' => $this->company_logo,
            'siupsku_number' => $this->siupsku_number,
            'siupsku_image' => $this->siupsku_image,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'passport_image' => $this->passport_image,
            'profile_image' => $this->profile_image,
            'garage_image' => $this->garage_image,
            'korwil_id' => $this->korwil_id,
            'korda_id' => $this->korda_id,
        ];
    }
}
