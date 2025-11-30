<?php

namespace Database\Factories\relation;

use App\Models\relation\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(1, 120),
            'scholar_year' => $this->faker->numberBetween(1, 12),
            'school_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
