<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SimpleUserResource extends JsonResource
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
            "name" => $this->name,
            "email" => $this->email,
            "profile_photo_path" => $this->profile_photo_path,
            "profile_photo_url" => $this->profile_photo_url,
            "created_at" => $this->created_at,
        ];
    }
}
