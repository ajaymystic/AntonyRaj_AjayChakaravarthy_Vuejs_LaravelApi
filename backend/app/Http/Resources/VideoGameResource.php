<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoGameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'           => $this->id,
            'title'        => $this->title,
            'description'  => $this->description,
            'platform'     => $this->platform,
            'release_year' => $this->release_year,
            'rating'       => $this->rating,
            'genre'        => new GenreResource($this->whenLoaded('genre')),
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];//Listing each field of the video game resource to be returned in the API response, including the related genre resource when it's loaded.
    }
}