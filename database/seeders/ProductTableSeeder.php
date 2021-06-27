<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();
        foreach(range(1,10) as $value){
            Product::create([
                "name" => $faker->name(),
                "detail" => $faker->text,
            ]);
        }
    }
}