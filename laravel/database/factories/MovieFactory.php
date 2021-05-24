<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence($nbWords = 3, $variableNbWords = false),
        'original_title' => $faker -> sentence($nbWords = 3, $variableNbWords = false),
        'nationality' => $faker -> country,
        'date' => $faker -> date,
        'vote' => $faker -> randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10),
    ];
});
