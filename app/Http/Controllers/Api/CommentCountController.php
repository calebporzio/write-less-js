<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Http\Controllers\Controller;

class CommentCountController extends Controller
{
    public function show()
    {
        return ['count' => Comment::count()];
    }
}
