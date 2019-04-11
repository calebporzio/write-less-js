<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class CommentPageController extends Controller
{
    public function show()
    {
        return view('future.comments');
    }
}
