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
        $student = Student::all();
//        return StudentResource::collection(Student::all());
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
}
