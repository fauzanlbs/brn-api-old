<?php

namespace App\Http\Resources;

use App\Http\Resources\UserResource;
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
            "cover_image" =>  $this->cover_image, // path
            "cover_image_url" =>  $this->cover_image_url, // auto generate url from cover_image path
            "featured" =>  $this->featured,
            "finished_at" =>  $this->finished_at,
            "private" => $this->private,
            "discussion_type" => $this->discussion_type,
            "group_code" => $this->group_code, 
            "created_at" =>  $this->created_at,
            "updated_at" =>  $this->updated_at,
            "likes_count" =>  $this->likes_count,
            "comments_count" =>  $this->comments_count,
            'invited_users_count' => $this->invited_users_count,
            "invited_users" =>  $this->invitedUsers,
            "user" =>  new SimpleUserResource($this->whenLoaded('user')),
            "case_report" =>  new SimpleUserResource($this->whenLoaded('caseReport')),
            'discussion_type' => $this->discussion_type
        ];
    }
}
