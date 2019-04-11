<?php

use Illuminate\Database\Seeder;
use App\Repository;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(Repository::class, 50)->create();
    }
}
