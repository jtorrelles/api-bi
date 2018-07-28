<?php

use Illuminate\Database\Seeder;
use App\Models\Venues;

class VenuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $venues = factory(Venues::class, 30)->create();
    }
}
