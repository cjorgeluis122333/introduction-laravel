<?php

namespace Database\Factories\relation;

use App\Models\relation\Director;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DirectorFactory extends Factory
{
    protected $model = Director::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'experience_year' => $this->faker->numberBetween(1, 50),
            'school_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
