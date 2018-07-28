<?php

use Illuminate\Database\Seeder;
use App\Models\Cities;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cities = factory(Cities::class, 5)->create();
    }
}
