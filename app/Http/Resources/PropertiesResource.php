<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertiesResource extends JsonResource
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
            'id' => $this->id,
            'category_id' => $this->category_id,
            'category_name' => $this->catrgory->title,
            'title' => $this->title,
            'description' => $this->description,
            'author' => $this->author,
            'creation_date' => date('d-m-Y', strtotime($this->created_at)),
            'comments_count' => count($this->comments),
            'main_image' => $this->main_image ? asset($this->main_image) : asset(settings()->logo),
           'comments' => CommentResource::collection($this->comments),

        ];
    }
}
