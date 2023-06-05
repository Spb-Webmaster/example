<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Services\PostsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $file = Post::findOrFail(19);
//        foreach ($posts as $post) {
//            $post->img = Storage::get($post->img) ?? null;
//            $post->save();
//        }

        return view('posts/index', [
            'posts' => $posts,
            'file' => $file
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
        $file = $request->file('file-input');
        $filePath = $file->store('files');
        $postService = new PostsService();
        $service = $postService->createNewPost($request->validated(), $filePath);

        return redirect()->route('posts');

    }

    public function update()
    {
        return redirect()->route('admin/update');

    }

}
