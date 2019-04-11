<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repository;

class RepoController extends Controller
{
    public function index()
    {
        // Fake thinking.
        usleep(50000);

        $search = request('search');

        return [
            'repos' => Repository::search('name', $search)->limit(4)->get(),
        ];
    }
}
