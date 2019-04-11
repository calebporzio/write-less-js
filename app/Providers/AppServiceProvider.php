<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Builder::macro('search', function ($name, $search) {
            return $this->where($name, 'LIKE', $search ? '%' . $search . '%' : '');
        });
    }
}
