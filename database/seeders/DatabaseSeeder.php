<?php

namespace Database\Seeders;

use App\Models\relation\Book;
use App\Models\relation\Director;
use App\Models\relation\School;
use App\Models\relation\Service;
use App\Models\relation\Student;
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
//            PhoneSeeder::class
        ]);
        //==============================================================FACTORY
        //Relation them factories
//        School::factory()->count(10)->create();
//        Service::factory()->count(10)->create();
//        Director::factory()->count(10)->create();
//        Student::factory()->count(10)->create();
//        Book::factory()->count(10)->create();


        //Introduction laravel factories
//        Producto::factory(10)->create();
//        UserResource::factory(10)->create();
//        UserResource::factory()->create([
//            'name' => 'Test UserResource',
//            'email' => 'test@example.com',
//        ]);
    }
}
