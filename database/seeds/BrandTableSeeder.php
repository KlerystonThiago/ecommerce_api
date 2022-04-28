<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandTableSeeder extends Seeder
{
    public function run()
    {
        Brand::create([
            "name" => "Eletrolux"
        ]);

        Brand::create([
            "name" => "Brastemp"
        ]);

        Brand::create([
            "name" => "Fischer"
        ]);

        Brand::create([
            "name" => "Samsung"
        ]);

        Brand::create([
            "name" => "LG"
        ]);
    }
}
