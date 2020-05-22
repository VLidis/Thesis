<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Metro;
use Faker\Generator as Faker;

$factory->define(Metro::class, function (Faker $faker) {
    return [
        'longitude'=> $faker->longitude(23.62479,23.923138),
        'latitude'=> $faker->latitude(38.098071,37.861552)
    ];
});
