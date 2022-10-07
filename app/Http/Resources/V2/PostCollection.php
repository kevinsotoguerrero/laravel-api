<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

/* php artisan make:resource V2/PostCollection para crear el recurso de coleccion */

class PostCollection extends ResourceCollection
{
    //public $collects= PostResource::class; //para que tome el PostResource, pero lo ha tomado sin asignarlo.
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection,
            'meta'=>[
                'organization'=>'ksg',
                'author'=>'kevinsotoguerrero'
            ],
            'type'=>'articles'
        ];
    }
}
