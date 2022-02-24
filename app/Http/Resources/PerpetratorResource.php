<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PerpetratorResource extends JsonResource
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
            "id" => $this->id,
            "case_report_id" => $this->case_report_id?$this->case_report_id:"",
            "nik" => $this->nik?$this->nik:"",
            "name" => $this->name?$this->name:"",
            "phone_number" =>  $this->phone_number?$this->phone_number:"",
            "address" =>  $this->address?$this->address:"",
            "profile_photo_url" => $this->profile_photo_url?$this->profile_photo_url:"",
            "chronology" => $this->chronology?$this->chronology:"",
            "birth_date" =>  $this->birth_date?$this->birth_date:"",
            "created_by_id" =>  $this->created_by_id?$this->created_by_id:"",

        
        ];
    }
}
