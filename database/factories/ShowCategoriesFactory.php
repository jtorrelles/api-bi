<?php

use Faker\Generator as Faker;
use App\Models\Shows;
use App\Models\Categories;

$factory->define(App\Models\ShowCategories::class, function (Faker $faker) {

    return [
		    'show_id' => Shows::all()->random()->id,
        	'category_id' => Categories::all()->random()->id
    ];
});
