<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Student::with('class')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'class_id' => 'nullable|exists:classes,id',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'roll_no' => 'nullable',
            'enrollment_number' => 'required',
        ]);

        $student = Student::create($data);
        return  response()->json($student);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'class_id' => 'required|exists:classes,id',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'enrollment_number' => 'required',
        ]);

        $student->update($data);
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['message' => 'Student deleted successfully']);
    }
}
