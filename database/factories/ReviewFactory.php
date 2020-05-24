<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'body' => $faker->realText(50, 2),
        'created_at' => $faker->dateTimeBetween('-90days')
    ];
});
