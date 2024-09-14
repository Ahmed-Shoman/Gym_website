<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .app-container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            font-size: 1.1em;
        }

        .sidebar ul li a:hover {
            background-color: #575757;
        }

        .content {
            margin-left: 200px; /* This matches the sidebar width */
            padding: 20px;
            width: calc(100% - 200px); /* Adjust content width */
        }
    </style>
</head>
<body>
    <div class="app-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="{{ route('arm.index') }}">Arm Day</a></li>
                <li><a href="{{ route('chest.index') }}">Chest Day</a></li>
                <li><a href="{{ route('back.index') }}">Back Day</a></li>
                <li><a href="{{ route('leg.index') }}">Leg Day</a></li>
                <li><a href="{{ route('shoulder.index') }}">Shoulder Day</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
