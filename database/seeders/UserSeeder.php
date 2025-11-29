<?php

namespace Database\Seeders;

use App\Models\user\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Jorge Luis',
            'email' => 'jorgeluis@gmail.com',
            'password' => Hash::make('123456'),
            'age' => 24,
            'address' => 'Reparto morales',
            'zip_code' => 290423
        ]);


    }
}
