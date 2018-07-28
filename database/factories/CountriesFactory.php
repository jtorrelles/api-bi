<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Countries::class, function (Faker $faker) {
    return [
        'shortname' => $faker->lexify('?????'),
        'name' => $faker->text(100),
        'phonecode' => $faker->randomNumber($nbDigits = 3, $strict = false)
    ];
});
