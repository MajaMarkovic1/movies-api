<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentences(1, true),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480),
        'duration' => $faker->numberBetween($min = 0, $max = 200),
        'releaseDate' => $faker->date('Y-m-d', 'now'),
        'genre' => $faker->word
    ];
});
