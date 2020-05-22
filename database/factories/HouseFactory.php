<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\House;
use Faker\Generator as Faker;

$factory->define(House::class, function (Faker $faker) {
    return [
        'longitude'=> $faker->longitude(23.62479,23.923138),
        'latitude'=> $faker->latitude(38.098071,37.861552),
        'description'=>$faker->realText($maxNbchars=50,$indexSize=2),
        'bedrooms'=>$faker->numberBetween(1,8),
        'size'=>$faker->numberBetween(25,400),
        'floor'=>$faker->numberBetween(0,12),
        'heat'=>$faker->numberBetween(0,3),
        'year'=>$faker->numberBetween(1960,2020),
        'newBuild'=>$faker->boolean,
        'price'=>$faker->numberBetween(25000,1000000),
        'singleFloor'=>$faker->boolean,
        'hasElevator'=>$faker->boolean,


    ];
});
