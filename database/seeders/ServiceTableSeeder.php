<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();
        foreach(range(1,10) as $value){
            Service::create([
                "name" => $faker->name(),
                "detail" => $faker->text,
            ]);
        }
    }
}