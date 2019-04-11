<?php

namespace App\Http\Controllers;

use App\Repository;

class RepoController
{
    public function index()
    {
        // Fake thinking.
        usleep(50000);

        $search = request('search');

        return view('_repo-list', [
            'repos' => Repository::search('name', $search)->limit(4)->get(),
        ]);
    }
}
