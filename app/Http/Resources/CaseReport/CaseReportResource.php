<?php

namespace App\Http\Resources\CaseReport;

use App\Http\Resources\CarResource;
use App\Http\Resources\SimpleUserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CaseReportResource extends JsonResource
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
            "user_id" => $this->user_id,
            "car_id" => $this->car_id,
            "in_charge_id" => $this->in_charge_id,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            "chronology" => $this->chronology,
            "status" => $this->status,
            "request_delete" => $this->request_delete,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "car" => new CarResource($this->whenLoaded('car')),
            "perpetrator" => new PerpetratorResource($this->whenLoaded('perpetrator')),
            "in-charge" => new SimpleUserResource($this->whenLoaded('inCharge')),
        ];
    }
}
