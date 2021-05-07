<?php

namespace App\Http\Resources\CaseReport;

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
            "case_report_id" => $this->case_report_id,
            "profile_photo_path" => $this->profile_photo_path,
            "profile_photo_url" => $this->profile_photo_url,
            "nik" => $this->nik,
            "name" => $this->name,
            "phone_number" => $this->phone_number,
            "address" => $this->address,
            "information" => $this->information,
        ];
    }
}
