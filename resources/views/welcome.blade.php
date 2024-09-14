<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .welcome-container {
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            color: #333;
        }

        .new-day-button {
            padding: 15px 30px;
            font-size: 1.2em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .new-day-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Your Fitness Tracker</h1>
        <button class="new-day-button" onclick="location.href='{{ route('arm.index') }}'">Go to Make a New Day</button>
    </div>
</body>
</html>
