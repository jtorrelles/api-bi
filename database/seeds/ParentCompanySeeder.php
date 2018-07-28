<?php

use Illuminate\Database\Seeder;
use App\Models\ParentCompany;

class ParentCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent_company = factory(ParentCompany::class, 5)->create();     
    }
}
