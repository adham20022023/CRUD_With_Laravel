<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return PostResource::collection($posts);
    }
    public function show($post){
        $post=post::find($post);
        return new PostResource($post);

    }
}
