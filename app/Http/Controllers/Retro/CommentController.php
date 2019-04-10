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
        $comment = Comment::create(request()->validate([
            'content' => 'required',
        ], ['required' => 'The comment cannot be empty']));

        return redirect()->to('/retro/comment#comment-'.$comment->id);
    }
}
