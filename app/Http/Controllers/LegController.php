<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegDay;

class LegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $legDay = LegDay::all();
        return view('leg.index', compact('legDay'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leg.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|integer',
        ]);

        // Create a new LegDay record
        LegDay::create([
            'training_type' => $request->training_type,
            'groups' => $request->groups,
            'reps' => $request->reps,
            'weights' => $request->weights,
        ]);

        return redirect()->route('leg.index')->with('success', 'Leg Day added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(LegDay $legDay)
    {
        return view('leg.show', compact('legDay'));
    }

    /**
     * Show the form for editing the specified resource.
     */
  public function edit($id)
{
    $legDay = LegDay::findOrFail($id);
    return view('leg.edit', compact('legDay'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LegDay $legDay)
    {
        // Validate the request data
        $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|integer',
        ]);

        // Update the LegDay record
        $legDay->update([
            'training_type' => $request->training_type,
            'groups' => $request->groups,
            'reps' => $request->reps,
            'weights' => $request->weights,
        ]);

        return redirect()->route('leg.index')->with('success', 'Leg Day updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LegDay $legDay)
    {
        $legDay->delete();
        return redirect()->route('leg.index')->with('success', 'Leg Day deleted successfully.');
    }
}