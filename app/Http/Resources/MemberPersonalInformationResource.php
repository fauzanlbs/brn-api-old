<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberPersonalInformationResource extends JsonResource
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
            "bio" => $this->bio,
            "gender" => $this->gender,
            "date_of_birth" => $this->date_of_birth,
            "company_name" => $this->company_name,
            "company_logo" => $this->company_logo,
            "area" => $this->area,
            "region" => $this->region,
        ];
    }
}
