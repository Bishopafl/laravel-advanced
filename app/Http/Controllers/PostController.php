<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::select('id', 'title', 'status')->paginate();
        return view('posts.index',  compact('posts'));
    }

    public function show(Post $post) {
        // $post = Post::findOrFail($id); // learning to make this call to the database better...

        return view('posts.show', compact('post'));
    }
}