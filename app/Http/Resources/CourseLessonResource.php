<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseLessonResource extends JsonResource
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
            "title" => $this->title,
            "description" => $this->description,
            "youtube_url" => $this->youtube_url,
            "video_id" => $this->_getIdVideo($this->youtube_url),
            "likes_count" =>  $this->likes_count,
            "comments_count" =>  $this->comments_count,
            "updated_at" => $this->updated_at,
        ];
    }
    
    private function _getIdVideo($url){
    parse_str( parse_url( $url, PHP_URL_QUERY ), $res );
	return $res['v']; 
    }
}
