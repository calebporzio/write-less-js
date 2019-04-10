<?php

namespace App\Http\Controllers\Future;

use App\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function store()
    {
        Comment::create(request()->validate([
            'content' => 'required',
        ], ['required' => 'The comment cannot be empty']));

        return response(200);
    }
}
