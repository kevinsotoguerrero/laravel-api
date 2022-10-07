<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

/* php artisan make:resource V1/PostResouce para crear un recurso, modificacion de impresion de la api */

class PostResource extends JsonResource
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
            'id'=>$this->id,
            'post_name'=>$this->title,
            'slug'=>$this->slug,
            'content'=>$this->content,
            'author'=>[
                'name'=>$this->user->name,
                'email'=>$this->user->email
            ],
            'created_at'=>$this->published_at
        ];
    }
}
