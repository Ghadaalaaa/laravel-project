<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts=post::all();
        return PostResource::collection($posts) ;
    }

    public function show($post)
     {
         $post =post::FindOrFail($post);
            // $arr=[
            //     'id' =>$post->id,
            //     'title' =>$post->title,
            //     'description' =>$post->description,
            // ];
         return new PostResource($post);
     }

     public function store(StorePostRequest $request){
        $post=post::create([
            'title' => $request->title ,
            'description' => $request->description,
            'user_id' =>$request->post_creator ,
        ]
        );
        return new PostResource($post);
     }
}
