<?php

namespace Database\Factories;

use App\Models\middleware\UserAuth;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UserAuthFactory extends Factory
{
    protected $model = UserAuth::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
