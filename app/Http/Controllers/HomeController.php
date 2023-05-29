<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::latest()->take(2)->get();
        return view('index', [
            'posts' => $posts
        ]);

    }
}
