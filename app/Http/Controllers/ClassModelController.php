<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(ClassModel::all());
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
            'name' => 'required|string',
            'grade' => 'required|string',
            'teacher_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'room_no' => 'required|string',
        ]);

        $class = ClassModel::create($data);
        return response()->json(['meassge' => 'Class created successfully', 'data' => $class]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassModel $classModel)
    {
        return response()->json($classModel);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassModel $classModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClassModel $classModel)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'grade' => 'required|string',
            'teacher_id' => 'required|integer',
            'subject_id' => 'required|integer',
            'room_no' => 'required|string',
        ]);

        $classModel->update($data);
        return response()->json(['meassge' => 'Class updated successfully', 'data' => $classModel]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassModel $classModel)
    {
        $classModel->delete();
        return response()->json(['meassge' => 'Class deleted successfully']);
    }
}
