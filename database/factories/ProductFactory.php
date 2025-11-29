<?php

namespace Database\Factories;

use App\Models\school\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Random\RandomException;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * @throws RandomException
     */
    public function definition(): array
    {
        //Used Faker
        return [
            'name' =>fake()->name(),//Generate a random of 25 character
            'short_description' =>fake()->sentence(),
            'description' => fake()->paragraph(3),
            'price' => fake()->numberBetween(1, 150),
        ];

  //Used random values
//        return [
//            'name' => Str::random(25),//Generate a random of 25 character
//            'short_description' =>Str::random(25),
//            'description' =>Str::random(150),
//            'price' => random_int(1,125),
//        ];
    }
}
