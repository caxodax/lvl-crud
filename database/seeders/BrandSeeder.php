<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\Model;
use Illuminate\Database\Seeder;
use App\Models\Brand;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Brand::factory(10)->create();

    }
}
