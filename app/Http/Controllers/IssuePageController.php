<?php

namespace App\Http\Controllers;

use App\Comment;

class IssuePageController
{
    public function show()
    {
        return view('issue-page', [
            'comments' => Comment::all(),
        ]);
    }

    public function storeComment()
    {
        $comment = Comment::create(request()->validate([
            'content' => 'required',
        ], ['required' => 'The comment cannot be empty']));

        return redirect()->to('/retro/comment#comment-'.$comment->id);
    }
}
