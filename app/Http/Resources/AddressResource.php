<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'label' => $this->label,
            'given_name' => $this->given_name,
            'family_name' => $this->family_name,
            'organization' => $this->organization,
            'country_code' => $this->country_code,
            'street' => $this->street,
            'state' => $this->state,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'is_primary' => $this->is_primary,
            'is_billing' => $this->is_billing,
            'is_shipping' => $this->is_shipping,
        ];
    }
}
