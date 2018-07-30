<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(4, 8), true),
        'body' => $faker->paragraphs(rand(2, 10), true),
        'user_id' => rand(1,10)
    ];
});
