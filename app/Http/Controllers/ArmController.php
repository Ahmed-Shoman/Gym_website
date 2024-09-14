<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArmDay; // Assuming your model is named ArmDay

class ArmController extends Controller
{
    public function index()
    {
        $arm_day = ArmDay::all();
        return view('arm.index', compact('arm_day'));
    }

    public function create()
    {
        return view('arm.create');
    }

    public function store(Request $request)
    {
        // التحقق من صحة البيانات قبل إدخالها
        $validatedData = $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|integer',
        ]);

        // إدخال البيانات في قاعدة البيانات
        ArmDay::create([
            'training_type' => $validatedData['training_type'],
            'groups' => $validatedData['groups'],
            'reps' => $validatedData['reps'],
            'weights' => $validatedData['weights'],
        ]);

        return redirect()->route('arm.index')->with('success', 'Day created successfully!');
    }

    public function edit($id)
    {
        $armDay = ArmDay::find($id);

        if (!$armDay) {
            return redirect()->route('arm.index')->with('error', 'Day not found.');
        }

        return view('arm.edit', compact('armDay'));
    }

    public function update(Request $request, $id)
    {
        // التحقق من صحة البيانات قبل التحديث
        $validatedData = $request->validate([
            'training_type' => 'required|string|max:255',
            'groups' => 'required|integer',
            'reps' => 'required|integer',
            'weights' => 'required|integer',
        ]);

        $armDay = ArmDay::find($id);

        if (!$armDay) {
            return redirect()->route('arm.index')->with('error', 'Day not found.');
        }

        // تحديث البيانات في قاعدة البيانات
        $armDay->update([
            'training_type' => $validatedData['training_type'],
            'groups' => $validatedData['groups'],
            'reps' => $validatedData['reps'],
            'weights' => $validatedData['weights'],
        ]);

        return redirect()->route('arm.index')->with('success', 'Day updated successfully!');
    }

    public function destroy($id)
    {
        $armDay = ArmDay::find($id);

        if (!$armDay) {
            return redirect()->route('arm.index')->with('error', 'Day not found.');
        }

        // حذف البيانات من قاعدة البيانات
        $armDay->delete();

        return redirect()->route('arm.index')->with('success', 'Day deleted successfully!');
    }
}
