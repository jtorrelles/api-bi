<?php

use Illuminate\Database\Seeder;
use App\Models\Shows;

class ShowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $shows = factory(Shows::class, 20)->create();
    }
}
