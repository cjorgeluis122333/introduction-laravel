<?php

namespace Database\Factories\relation;

use App\Models\relation\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement(["Park", "Restaurant","Sport Area"]),
        ];
    }
}
