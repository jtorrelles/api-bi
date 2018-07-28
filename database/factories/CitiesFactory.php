<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Cities::class, function (Faker $faker) {
    return [
        'shortname' => $faker->text(5),
        'name' => $faker->text(100),
        'state_id' => App\Models\States::pluck('id')->random()
    ];
});
