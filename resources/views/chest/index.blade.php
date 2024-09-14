<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <!-- Additional content goes here -->
@endsection

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chest Day Workouts</title>
    <style>
        /* Tailwind CSS CDN */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Chest Day Workouts</h1>

        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-600">
                    <th class="py-3 px-6 text-left">Training Type</th>
                    <th class="py-3 px-6 text-left">Groups</th>
                    <th class="py-3 px-6 text-left">Reps</th>
                    <th class="py-3 px-6 text-left">Weights</th>
                    <th class="py-3 px-6 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chest_day as $chestDay)
                <tr class="border-b border-gray-200">
                    <td class="py-3 px-6">{{ $chestDay->training_type }}</td>
                    <td class="py-3 px-6">{{ $chestDay->groups }}</td>
                    <td class="py-3 px-6">{{ $chestDay->reps }}</td>
                    <td class="py-3 px-6">{{ $chestDay->weights }}</td>
                    <td class="py-3 px-6 flex space-x-2">
                        <a href="{{ route('chest.edit',$chestDay->id) }}" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">Edit</a>
                        <form action="{{ route('chest.destroy',$chestDay->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('chest.create') }}" class="mt-6 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create New Day</a>
    </div>
</body>
</html>
