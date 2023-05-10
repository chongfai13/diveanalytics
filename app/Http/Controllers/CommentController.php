<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function index()
    {
        $comments = Comment::orderBy('id','asc')->paginate(5);
        return view('comments', compact('comments'));
    }
}
