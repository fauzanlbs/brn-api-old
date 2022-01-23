<?php

namespace App\Http\Resources\Onboarding;

use Illuminate\Http\Resources\Json\JsonResource;

class OnboardingResource extends JsonResource
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
            "image" => $this->image,
            "image_url" => $this->image_url,
            "title" => $this->title,
            "description" => $this->description,
            "active" => $this->active,
            "order" => $this->order,
            "group_code" => $this->group_code
        ];
    }
}
