<?php

namespace App\Services;

use App\Models\Post;

class PostsService
{

    public function createNewPost($request){

     //   dd($request);

        // нужно проверить request

        return (new Post())->create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'img' => $request->get('img'),
        ]);

    }
}
