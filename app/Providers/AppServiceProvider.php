<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Builder::macro('search', function ($name, $search) {
            return $this->where($name, 'LIKE', $search ? '%'.$search.'%' : '');
        });
    }
}
