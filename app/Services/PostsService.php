<?php

namespace App\Services;

use App\Models\Post;

class PostsService
{

    public function createNewPost($post){

     //   dd($request);

        // нужно проверить request

        return Post::createPost($post);

    }
}
