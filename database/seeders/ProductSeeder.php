<?php

namespace Database\Seeders;

use App\Models\school\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        //Factory: Random date for test your database
        Product::factory()->count(150)->create();


        //Seeder: Date util for init your database
//        Product::create([
//            'name' => 'MacBook Pro',
//            'price' => 1000,
//            'short_description' => "Is a very nice MacBook Pro",
//            'description' => "This is a very nice MacBook Pro and you have al lot money if you bay it",
//        ]);
//        Product::create([
//            'name' => 'Iphone X',
//            'price' => 600,
//            'short_description' => "Is a very nice Iphone X Pro",
//            'description' => "This is a very nice Iphone X Pro and you have a lot money if you bay it",
//        ]);
//        Product::create([
//            'name' => 'Pan',
//            'price' => 21,
//            'short_description' => "Is a very nice Pan Pro",
//            'description' => "This is a very nice Pan Pro",
//        ]);
    }
}
