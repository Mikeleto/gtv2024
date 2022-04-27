<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use Faker\Generator as Faker;

$factory->define(\App\ThematicArea::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'description'=> $faker->sentence(2)
    ];
});