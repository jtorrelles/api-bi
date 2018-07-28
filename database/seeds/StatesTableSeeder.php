<?php

use Illuminate\Database\Seeder;
use App\Models\States;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $states = factory(States::class, 5)->create();
    }
}
