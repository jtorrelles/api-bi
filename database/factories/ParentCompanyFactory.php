<?php

use Faker\Generator as Faker;

$factory->define(App\Models\ParentCompany::class, function (Faker $faker) {
    return [
        'shortname' => $faker->text(5, $strcit=false),
        'description' => $faker->text(60)
    ];
});
