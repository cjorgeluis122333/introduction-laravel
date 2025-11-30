<?php

namespace Database\Factories;

use App\Models\relation\School;
use App\Models\relation\SchoolService;
use App\Models\relation\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolServiceFactory extends Factory
{
    protected $model = SchoolService::class;

    public function definition(): array
    {
        return [
            // Asigna un ID de escuela existente al azar
            'school_id' => School::factory(), // Alternativamente: School::all()->random()->id

            // Asigna un ID de servicio existente al azar
            'service_id' => Service::factory(), // Alternativamente: Service::all()->random()->id

            // Genera un valor aleatorio para el campo pivote 'cost'
            'cost' => $this->faker->randomFloat(2, 50, 500), // Precio entre 50 y 500 con 2 decimales
        ];
    }
}
