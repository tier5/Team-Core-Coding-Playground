<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\PostResource;

class PostsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        // return [
        //     'title'              =>  $this->collection,
        //     'links'              =>  [
        //     'post_details' =>  url('http://dev.socialblog/api/api/'),    
        //     ]
        // ];
    }
}
