<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'image' => $faker->imageUrl(500, 500),
        'score' => str_random(1),
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => int_random(10),
    ];
});
