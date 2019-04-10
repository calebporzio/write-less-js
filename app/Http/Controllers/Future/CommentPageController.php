<?php

namespace App\Http\Controllers\Future;

use App\Http\Controllers\Controller;

class CommentPageController extends Controller
{
    public function show()
    {
        return view('future.comments');
    }
}
