<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleRequest;
use App\Models\user\People;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return $people;

    }

    public function insertPeople(PeopleRequest $request)
    {
        // Si llegamos aquí, la validación YA PASÓ
        $person = People::create($request->all());

        return response()->json([
            'res' => true,
            'message' => 'Person created successfully',
            'data' => $person
        ], 201);
    }

    public function deletePeopleById(Request $request)
    {
        try {
            $people = People::findOrFail($request->id);
            $people->delete();

            return response()->json([
                "body" => $request->id,
                'res' => true,
                'message' => 'Person deleted successfully',
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'res' => false,
                'message' => 'Person not found'
            ], 404);
        }
    }

    public function updatePeopleById(Request $request, $id)
    {
        // Validar primero los datos
        $validatedData = $request->validate([
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255"
        ]);

        try {
            $people = People::findOrFail($id);

            // Actualizar
            $people->update($validatedData);

            // Recargar el modelo para obtener los datos actualizados
            $people->refresh();

            return response()->json([
                'res' => true,
                'message' => 'Person updated successfully',
                'data' => $people
            ]);

        } catch (ModelNotFoundException $e) {
            return response()->json([
                'res' => false,
                'message' => 'Person not found'
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'res' => false,
                'message' => 'Error updating person: ' . $e->getMessage()
            ], 500);
        }
    }

    public function findPeopleById($people)
    {

        $people = People::find($people);
        if ($people) {
            return response()->json($people);
        }
        {
            return response()->json([
                'res' => false,
            ]);
        }

    }


}
