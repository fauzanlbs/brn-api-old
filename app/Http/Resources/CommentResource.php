<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            "comment" => $this->comment,
            "likes_count" =>  $this->likes_count,
            "created_at" => $this->created_at,
            "user" =>  new SimpleUserResource($this->whenLoaded('commentator')),
            "replies_count" =>  $this->replies_count,
        ];
    }
}
