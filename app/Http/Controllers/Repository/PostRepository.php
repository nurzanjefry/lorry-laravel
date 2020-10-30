<?php

namespace App\Http\Controllers\Repository;
use App\Models\Post;



class PostRepository
{

    public function __construct(Request $request)
    {
        // unset($request['_token']);
    }

    public function createPost($data)
    {
        $modelInstance = Post::insert($data);
    }

}
