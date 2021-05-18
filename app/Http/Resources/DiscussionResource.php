<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscussionResource extends JsonResource
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
            "id" =>  $this->id,
            "case_report_id" =>  $this->case_report_id,
            "slug" =>  $this->slug,
            "title" =>  $this->title,
            "description" =>  $this->description,
            "featured" =>  $this->featured,
            "created_at" =>  $this->created_at,
            "updated_at" =>  $this->updated_at,
            "likes_count" =>  $this->likes_count,
            "comments_count" =>  $this->comments_count,
            "user" =>  new SimpleUserResource($this->whenLoaded('user')),
            "case_report" =>  new SimpleUserResource($this->whenLoaded('caseReport')),
        ];
    }
}
