<?php

namespace Database\Factories\relation;

use App\Models\relation\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'total_page' => $this->faker->numberBetween(10-1000),
            'description' => $this->faker->text(100),
            'author_id' => $this->faker->numberBetween(1,10),
            'student_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
