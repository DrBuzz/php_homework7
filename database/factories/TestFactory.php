<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Test::class, function (Faker $faker) {
    return [
        'text' => $faker->name
    ];
});


