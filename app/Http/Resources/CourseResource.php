<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
            "level" => $this->level,
            "is_diklat" => $this->is_diklat,
            "user_id" => $this->user_id,
            "user" =>  new SimpleUserResource($this->whenLoaded('user')),
            "image" => $this->image,
            "image_url" => $this->image_url,
            "name" => $this->name,
            "description" => $this->description,
            "lessons_count" => $this->lessons_count,
            "likes_count" =>  $this->likes_count,
            "comments_count" =>  $this->comments_count,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
