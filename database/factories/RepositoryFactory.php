<?php

use Faker\Generator as Faker;

$factory->define(App\Repository::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
