<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::orderBy('id','asc')->paginate(5);
        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
}
