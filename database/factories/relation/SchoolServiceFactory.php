<?php

namespace Database\Factories\relation;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolServiceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'school_id' => $this->faker->numberBetween(1,10),
            'service_id' => $this->faker->numberBetween(1,10),
            'cost' => $this->faker->numberBetween(1,1000),

        ];
    }
}
