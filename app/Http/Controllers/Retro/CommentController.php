<?php

namespace App\Http\Controllers\Retro;

use App\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        return view('retro.comments', [
            'comments' => Comment::all(),
        ]);
    }

    public function store()
    {
        Comment::create(request()->validate([
            'content' => 'required',
        ], ['required' => 'The comment cannot be empty']));

        return back();
    }
}
