<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Service;
use App\Models\Purchase;

class PurchaseTableSeeder extends Seeder
{

    public function run()
    {
        // $faker = \Faker\Factory::create();

        // Purchase::create([
        //     "user_id" => "1",
        //     "product_id" => "2",
        //     "service_id" => "2",
        //     "status" => "success"
        // ]);

        foreach(range(1,10) as $value){
            Purchase::create([
                "user_id" => User::inRandomOrder(2,10)->first()->id,
                "product_id" => Product::inRandomOrder()->first()->id,
                "service_id" => Service::inRandomOrder()->first()->id,
                "status" => 'success',
            ]);
        }

        // Purchase::create([
        //     "user_id" => function (){
        //         return User::all()->random();
        //     },
        //     "product_id" => function (){
        //         return Product::all()->random();
        //     },
        //     "service_id" => function (){
        //         return Service::all()->random();
        //     },
        //     "status" => 'success',
        // ]);
    }
}