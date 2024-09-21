<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\Address;

class StudentController extends Controller
{
    public function index()
    {
        return Student::with('addresses')->get();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'email' => 'required|email|unique:students,email',
        ]);

        $student = Student::create($validatedData);

        return response()->json($student, 201);
    }

    public function getAllData()
    {
        $students = Student::all();

        $data = [];
        foreach ($students as $student) {
            $address = Address::where('student_id', $student->_id)->first();
            $data[] = [
                'student' => $student,
                'address' => $address
            ];
        }
        return response()->json($data);
    }
}
