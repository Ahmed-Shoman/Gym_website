<?php

namespace App\Http\Controllers;

use App\Models\ChestDay;
use Illuminate\Http\Request;

class ChestController extends Controller
{
    // Display a listing of the chest day workouts
    public function index()
    {
        $chest_day = ChestDay::all();
        return view('chest.index', compact('chest_day'));
    }

    // Show the form for creating a new chest day workout
    public function create()
    {
        return view('chest.create');
    }

    // Store a newly created chest day workout in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|numeric',
        ]);

        // Create a new ChestDay record
        ChestDay::create([
            'training_type' => $request->input('training_type'),
            'groups' => $request->input('groups'),
            'reps' => $request->input('reps'),
            'weights' => $request->input('weights'),
        ]);

        // Redirect back with a success message
        return redirect()->route('chest.index')->with('success', 'Chest Day Workout has been added successfully!');
    }

    // Show the form for editing the specified chest day workout
    public function edit($id)
    {
        $chestDay = ChestDay::findOrFail($id);
        return view('chest.edit', compact('chestDay'));
    }

    // Update the specified chest day workout in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|numeric',
        ]);

        // Find the existing ChestDay record and update it
        $chestDay = ChestDay::findOrFail($id);
        $chestDay->update([
            'training_type' => $request->input('training_type'),
            'groups' => $request->input('groups'),
            'reps' => $request->input('reps'),
            'weights' => $request->input('weights'),
        ]);

        // Redirect back with a success message
        return redirect()->route('chest.index')->with('success', 'Chest Day Workout has been updated successfully!');
    }

    // Remove the specified chest day workout from the database
    public function destroy($id)
    {
        $chestDay = ChestDay::findOrFail($id);
        $chestDay->delete();

        // Redirect back with a success message
        return redirect()->route('chest.index')->with('success', 'Chest Day Workout has been deleted successfully!');
    }
}
