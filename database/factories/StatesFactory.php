<?php

use Faker\Generator as Faker;

$factory->define(App\Models\States::class, function (Faker $faker) {
    return [
        'shortname' => $faker->lexify('?????'),
        'name' => $faker->text(50),
        'country_id' => App\Models\Countries::pluck('id')->random()
    ];
});
