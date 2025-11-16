<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Seeder
        $this->call([
//                ProductSeeder::class
//            UserSeeder::class,
            PhoneSeeder::class
        ]);
        // UserResource::factory(10)->create();
//        UserResource::factory()->create([
//            'name' => 'Test UserResource',
//            'email' => 'test@example.com',
//        ]);
    }
}
