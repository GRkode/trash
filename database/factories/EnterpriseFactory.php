<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'logo' => $faker->sentence(2),
        'address' => $faker->address,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'facebook' => $faker->url,
        'youtube' => $faker->url,
        'twitter' => $faker->url,
    ];
});
