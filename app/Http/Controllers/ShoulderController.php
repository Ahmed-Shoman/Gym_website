<?php

namespace App\Http\Controllers;

use App\Models\ShoulderDay;
use Illuminate\Http\Request;

class ShoulderController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $shoulder_day = ShoulderDay::all();
        return view('shoulder.index', compact('shoulder_day'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('shoulder.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|integer',
        ]);

        ShoulderDay::create($request->all());

        return redirect()->route('shoulder.index')->with('success', 'Shoulder day workout added successfully.');
    }

    // Display the specified resource.
    public function show($id)
    {
        $shoulder_day = ShoulderDay::find($id);
        return view('shoulder.show', compact('shoulder_day'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $shoulder_day = ShoulderDay::find($id);
        return view('shoulder.edit', compact('shoulder_day'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|integer',
        ]);

        $shoulder_day = ShoulderDay::find($id);
        $shoulder_day->update($request->all());

        return redirect()->route('shoulder.index')->with('success', 'Shoulder day workout updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $shoulder_day = ShoulderDay::find($id);
        $shoulder_day->delete();

        return redirect()->route('shoulder.index')->with('success', 'Shoulder day workout deleted successfully.');
    }
}