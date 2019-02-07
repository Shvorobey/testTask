<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'image' => $faker->imageUrl(200, 200),
        'score' => $faker->numberBetween($min = 1, $max = 5),
        'time' => $faker->numberBetween($min = 30, $max = 500),
        'email_verified_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
