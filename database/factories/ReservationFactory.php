<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'treatment_type' => $faker->word(),
        'scheduled_at' => $faker->dateTimeBetween('-90days')
    ];
});
