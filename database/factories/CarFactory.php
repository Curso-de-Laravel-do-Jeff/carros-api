<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Repositories\Collections\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->firstName,
        'model' => $faker->name,
        'year' => $faker->year,
        'color' => $faker->colorName,
        'value' => rand(0,500000)
    ];
});
