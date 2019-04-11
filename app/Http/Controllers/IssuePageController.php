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
}
