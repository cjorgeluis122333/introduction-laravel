<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    public function run(): void
    {
        Phone::create([
            'prefix' => 34,
            'phone_number' => 56155557,
            'user_id' => 1
        ]);
        Phone::create([
            'prefix' => 3314,
            'phone_number' => 51335537,
            'user_id' => 13
        ]);
    }
}
