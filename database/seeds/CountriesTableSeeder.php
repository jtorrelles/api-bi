<?php

use Illuminate\Database\Seeder;
use App\Models\Countries;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $countries = factory(Countries::class, 5)->create();     
    }
}
