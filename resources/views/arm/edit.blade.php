<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training Form</title>
    <style>
        /* Tailwind CSS CDN */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <a href="{{ route('arm.index') }}" class="inline-block mb-4 text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-500 dark:hover:bg-purple-600 dark:focus:ring-purple-800">Back</a>

        <form method="POST" action="{{ route('arm.update', $armDay->id) }}">
        @csrf
        @method('PUT')
            <div class="mb-4">
                <label for="training_type" class="block text-gray-700 text-sm font-bold mb-2">Training Type</label>
                <input type="text" id="training_type" name="training_type" value="{{ $armDay->training_type }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            @error('training_type')
            <div class="text-sm text-red-400"> {{$message}}  </div>
            @enderror
            <div class="mb-4">
                <label for="groups" class="block text-gray-700 text-sm font-bold mb-2">Groups</label>
                <input type="number" id="groups" name="groups" value="{{ $armDay->groups }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            @error('groups')
            <div class="text-sm text-red-400"> {{$message}}  </div>
            @enderror
            <div class="mb-4">
                <label for="reps" class="block text-gray-700 text-sm font-bold mb-2">Reps</label>
                <input type="number" id="reps" name="reps" value="{{ $armDay->reps }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            @error('reps')
            <div class="text-sm text-red-400"> {{$message}}  </div>
            @enderror
            <div class="mb-4">
                <label for="weights" class="block text-gray-700 text-sm font-bold mb-2">Weights</label>
                <input type="number" id="weights" name="weights" value="{{ $armDay->weights }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            @error('weights')
            <div class="text-sm text-red-400"> {{$message}}  </div>
            @enderror
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
