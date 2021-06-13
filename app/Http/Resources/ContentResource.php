<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'content_id' => $this->id,
            'pocket_id' => $this->pocket_id,
            'content_url' => $this->content_url,
            'content_title' => $this->content_title,
            'content_excerpt' => $this->content_excerpt,
            'content_heading_image_url' => $this->content_heading_image_url,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'pocket' => $this->pocket,


        ];
    }
}
