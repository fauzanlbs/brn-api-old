<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            "slug" =>  $this->slug,
            "image" =>  $this->image,
            "image_url" =>  $this->image_url,
            "title" =>  $this->title,
            "content" =>  $this->content,
            "status" =>  $this->status,
            "date" =>  $this->date,
            "featured" =>  $this->featured,
            "created_at" =>  $this->created_at,
            "updated_at" =>  $this->updated_at,
            "likes_count" =>  $this->likes_count,
            "views_count" =>  $this->views_count,
            "comments_count" =>  $this->comments_count,
            "author" =>  new SimpleUserResource($this->whenLoaded('author')),
            "categories" =>  CategoryResource::collection($this->whenLoaded('categories')),
        ];
    }
}
