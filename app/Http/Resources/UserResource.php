<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "roles" => RoleResource::collection($this->whenLoaded('roles')),
            "sum_points" => intval($this->points_relation_sum_points),
            "name" => $this->name,
            "email" => $this->email,
            "email_verified_at" => $this->email_verified_at,
            "profile_photo_path" => $this->profile_photo_path,
            "profile_photo_url" => $this->profile_photo_url,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "addresses" =>  AddressResource::collection($this->whenLoaded('addresses')),
            "personal_information" =>  new PersonalInformationResource($this->whenLoaded('personalInformation')),
        ];
    }
}
