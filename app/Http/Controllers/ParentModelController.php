<?php

namespace App\Http\Controllers;

use App\Models\ParentModel;
use Illuminate\Http\Request;

class ParentModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(ParentModel::all());
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'office_address' => 'required',
        ]);

        $parentModel = ParentModel::create($data);
        return response()->json(['message' => 'ParentModel created', 'data' => $parentModel]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ParentModel $parentModel)
    {
        return response()->json($parentModel);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParentModel $parentModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParentModel $parentModel)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'profession' => 'required',
            'office_address' => 'required',
        ]);

        $parentModel->update($data);
        return response()->json(['message' => 'ParentModel updated', 'data' => $parentModel]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentModel $parentModel)
    {
        $parentModel->delete();
        return response()->json(['message' => 'ParentModel deleted']);
    }
}
