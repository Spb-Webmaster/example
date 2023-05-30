<?php

namespace App\Http\Controllers;

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

    public function indexAction()
    {
        return view('action/index');
    }

    public function create(Request $request)
    {
        $postService = new PostsService();
        $service = $postService->createNewPost($request);

        return redirect()->route('posts');

    }
}
