<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
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
            "title" => $this->title,
            "description" => $this->description,
            "value_target" => $this->value_target,
            "image" => $this->image,
            "image_url" => $this->image_url,
            "donated_at" => $this->donated_at,
            "donation_users" => $this->donation_users,
            "donation_user_count" => $this->donation_user_count,
            "donation_user_sum_nominal" => $this->donation_user_sum_nominal,
            "created_at" => $this->created_at,
        ];
    }
}
