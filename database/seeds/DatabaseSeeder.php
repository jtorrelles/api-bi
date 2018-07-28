<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CountriesTableSeeder::class);
         $this->call(StatesTableSeeder::class);
         $this->call(CitiesTableSeeder::class);
         $this->call(CategoriesSeeder::class);
         $this->call(ShowsSeeder::class);
         $this->call(ShowCategoriesSeeder::class);
         $this->call(ParentCompanySeeder::class);
         $this->call(VenuesSeeder::class);
    }
}
