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
            // "id" => $this->id,
            // "active" => $this->active,
            // "points_relation_sum_points" => intval($this->points_relation_sum_points),
            // "roles" => RoleResource::collection($this->whenLoaded('roles')),
            // "name" => $this->name,
            // "email" => $this->email,
            // "profile_photo_path" => $this->profile_photo_path,
            // "profile_photo_url" => $this->profile_photo_url,
            // "created_at" => $this->created_at,
            // "reason_for_inactivity" => $this->reason_for_inactivity,
            // "addresses" =>  AddressResource::collection($this->whenLoaded('addresses')),
            // "personal_information" =>  new MemberPersonalInformationResource($this->whenLoaded('personalInformation')),
            // "status" => $this->status,

            "id" => $this->id,
            "active" => $this->active,
            "status_level_diklat" => $this->status_level_diklat,
            "is_survey" => $this->is_survey,
            "roles" => RoleResource::collection($this->whenLoaded('roles')),
            // "sum_points" => intval($this->points_relation_sum_points),
            "points_relation_sum_points" => intval($this->points_relation_sum_points),
            "name" => $this->name,
            "email" => $this->email,
            "email_verified_at" => $this->email_verified_at,
            "profile_photo_path" => $this->profile_photo_path,
            "profile_photo_url" => $this->profile_photo_url,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "reason_for_inactivity" => $this->reason_for_inactivity,
            "payment_status" => $this->payment_status,
            "check_korda" => $this->check_korda,
            "check_korwil" => $this->check_korwil,
            "addresses" =>  AddressResource::collection($this->whenLoaded('addresses')),
            "personal_information" =>  new PersonalInformationResource($this->whenLoaded('personalInformation')),
            "status" => $this->status,
        ];
    }
}
