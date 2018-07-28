<?php

use Faker\Generator as Faker;

$factory->define(App\Models\States::class, function (Faker $faker) {
    return [
        'shortname' => $faker->text(5),
        'name' => $faker->text(50),
        'country_id' => App\Models\Countries::pluck('id')->random()
    ];
});
