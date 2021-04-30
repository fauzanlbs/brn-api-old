<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PointResource extends JsonResource
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
            "active" => $this->active,
            "name" => $this->name,
            "description" => $this->description,
            "points" => $this->points,
            "parent_id" => $this->parent_id,
            "childrens" => PointResource::collection($this->descendants),
        ];
    }
}
