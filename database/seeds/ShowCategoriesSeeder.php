<?php

use Illuminate\Database\Seeder;
use App\Models\ShowCategories;

class ShowCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $show_categories = factory(ShowCategories::class, 15)->create();
    }
}
