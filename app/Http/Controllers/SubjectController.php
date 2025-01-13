<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Subject::with('students')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'teacher_id' => 'required|integer',
            'class_id' => 'required|integer',
            'time' => 'required|string',
            'during' => 'required|string',
        ]);

        $subject = Subject::create($data);
        return response()->json(['message' => 'Subject created successfully', 'subject' => $subject]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return response()->json($subject);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'teacher_id' => 'required|integer',
            'class_id' => 'required|integer',
            'time' => 'required|string',
            'during' => 'required|string',
        ]);

        $subject->update($data);
        return response()->json(['message' => 'Subject updated successfully', 'subject' => $subject]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return response()->json(['message' => 'Subject deleted successfully']);
    }
}
