<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor;
use App\User;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'image' => '',
        'email' => $faker->unique()->safeEmail,
        'created_at' => $faker->dateTimeBetween('-90days'),
    ];
});
