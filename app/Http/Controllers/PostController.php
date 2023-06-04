<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\PostsService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts/index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $post = Post::query()->where('id', $id)->first();

        return view('posts/item', [
            'post' => $post
        ]);

    }

    public function createAction()
    {
        return view('admin/create-page');
    }

    public function updateAction($id)
    {
        $post = Post::query()->where('id', $id)->first();

        return view('admin/update-page', [
            'post' => $post
        ]);

    }

    public function create(PostRequest $request)
    {
        $postService = new PostsService();
        $service = $postService->createNewPost($request->validated());

        return redirect()->route('posts');

    }

    public function update()
    {
        return redirect()->route('admin/update');

    }

}
