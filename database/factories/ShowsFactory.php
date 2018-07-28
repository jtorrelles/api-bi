<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Shows::class, function (Faker $faker) {
    return [
        'name' => $faker->text(10, $strict=false),
        'active' => 'Y',
        'age' => $faker->randomNumber(2),
        'weekly_nut' => $faker->randomFloat(2, 1, 100 ),
        'number_of_cast' => $faker->text(10,$strict = false),
        'number_of_musicians' => $faker->randomNumber(2),
        'number_of_stagehands' => $faker->randomNumber(2),
        'number_of_trucks' => $faker->randomNumber(2),
        'notes' => $faker->text(100)
    ];
});
