<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            "points_relation_sum_points" => intval($this->points_relation_sum_points),
            "roles" => RoleResource::collection($this->whenLoaded('roles')),
            "name" => $this->name,
            "profile_photo_path" => $this->profile_photo_path,
            "profile_photo_url" => $this->profile_photo_url,
            "created_at" => $this->created_at,
            "addresses" =>  AddressResource::collection($this->whenLoaded('addresses')),
            "personal_information" =>  new MemberPersonalInformationResource($this->whenLoaded('personalInformation')),
        ];
    }
}
