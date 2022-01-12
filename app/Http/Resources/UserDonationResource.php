<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserDonationResource extends JsonResource
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
            "donation_id" => $this->donation_id,
            "name" => $this->name,
            "phone_number" => $this->phone_number,
            "email" => $this->email,
            "prayer" => $this->prayer,
            "nominal" => $this->nominal,
            "payment_status" => $this->payment_status,
            "created_at" => $this->created_at,
        ];
    }
}
