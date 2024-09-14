<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BackDay; // Assuming your model is named BackDay

class BackController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $back_day = BackDay::all();
        return view('back.index', compact('back_day'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('back.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|numeric',
        ]);

        // Create a new BackDay record
        BackDay::create([
            'training_type' => $request->training_type,
            'groups' => $request->groups,
            'reps' => $request->reps,
            'weights' => $request->weights,
        ]);

        // Redirect to index with a success message
        return redirect()->route('back.index')->with('success', 'Back day workout added successfully!');
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $backDay = BackDay::find($id);
        return view('back.edit', compact('backDay'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|numeric',
        ]);

        // Find the existing BackDay record and update it
        $backDay = BackDay::find($id);
        $backDay->update([
            'training_type' => $request->training_type,
            'groups' => $request->groups,
            'reps' => $request->reps,
            'weights' => $request->weights,
        ]);

        // Redirect to index with a success message
        return redirect()->route('back.index')->with('success', 'Back day workout updated successfully!');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $backDay = BackDay::find($id);
        $backDay->delete();

        return redirect()->route('back.index')->with('success', 'Back day workout deleted successfully!');
    }
}