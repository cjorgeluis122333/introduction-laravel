<?php

namespace App\Http\Controllers\relation;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\relation\School;
use App\Models\relation\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $school = School::find(1);

        // 1. Obtener el Director (Uno a Uno)
        // Usamos propiedad dinámica. Devuelve un objeto Director.
        $directorName = $school->director->name;

        // 2. Obtener Estudiantes (Uno a Muchos)
        // Usamos propiedad dinámica. Devuelve una Colección de Students.
        foreach ($school->students as $student) {
            echo $student->name;

            // Acceder a los libros de cada estudiante
            // $student->books es una colección
            $totalBooks = $student->book->count();
            echo " $totalBooks";
        }

        // 3. Obtener Servicios y el dato Pivote (Muchos a Muchos)
        foreach ($school->services as $service) {
            echo "Servicio: " . $service->name;

            // ACCEDER AL PIVOTE (costo)
            // Laravel crea un objeto 'pivot' automáticamente
            echo "Costo: " . $service->pivot->cost;
        }
    }

    public function store(Request $request)
    {
        $data = $request->validate([

        ]);

        return new StudentResource(Student::create($data));
    }

    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([

        ]);

        $student->update($data);

        return new StudentResource($student);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json();
    }


    public function attachServiceToSchool(Request $request, $school_id)
    {
        $school = School::findOrFail($school_id);

        $request->validate([
            'service_id' => 'required|exists:services,id', // Debe ser un ID de servicio válido
            'cost' => 'required|numeric|min:0',
        ]);

        // 1. Obtén la relación con el método `services()`
        // 2. Usa el método `attach()`
        // El primer argumento es el ID del Servicio.
        // El segundo argumento es un array con los datos de la tabla pivote.

        $school->services()->attach($request->service_id, [
            'cost' => $request->cost,
        ]);

        return "Servicio adjuntado correctamente a la escuela con costo: {$request->cost}";
    }
}
