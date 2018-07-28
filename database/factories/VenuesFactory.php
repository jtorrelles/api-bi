<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Venues::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address1' => $faker->address,
        'address2' => $faker->secondaryAddress,
        'city_id' => App\Models\Cities::pluck('id')->random(),
        'zip' => $faker->postcode,
        'phone' => $faker->tollFreePhoneNumber,
        'fax' => $faker->randomNumber(3),
        'email' => $faker->email,
        'notes' => $faker->text(100),
        'long' => $faker->longitude($min = -180, $max = 180),
        'lat' => $faker->latitude($min = -90, $max = 90),
        'active' => 'Y'
    ];
});
