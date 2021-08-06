<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            "status" => $this->status,
            "is_approved" => $this->is_approved,
            "police_number" => $this->police_number,
            "year" => $this->year,
            "is_automatic" => $this->is_automatic,
            "capacity" => $this->capacity,
            "equipment" => $this->equipment,
            "stnk_image" => $this->stnk_image,
            "machine_number" => $this->machine_number,
            "chassis_number" => $this->chassis_number,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "car_make" => new CarMakeResource($this->whenLoaded('carMake')),
            "car_type" => new CarTypeResource($this->whenLoaded('carType')),
            "car_fuel" => new CarFuelResource($this->whenLoaded('carFuel')),
            "car_model" => new CarModelResource($this->whenLoaded('carModel')),
            "car_color" => new CarColorResource($this->whenLoaded('carColor')),
            "car_images" => CarImageResource::collection($this->whenLoaded('carImages')),
        ];
    }
}
