<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <style>
        .profile-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
        }
        .profile-container:hover .profile-details {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-container .profile-details {
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: box-shadow 0.3s ease-in-out;
        }
        .profile-container .profile-picture {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-container .profile-name {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <div class="w-1/5 bg-blue-800 text-white min-h-screen p-4">
            <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
            <ul>
                <li class="mb-4"><a href="/" class="text-white hover:text-gray-300">Home</a></li>
                <li class="mb-4"><a href="/analytics" class="text-white hover:text-gray-300">Analytics</a></li>
                <li><a href="/settings" class="text-white hover:text-gray-300">Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="w-4/5 p-6">
            <!-- Profile Section -->
            <div class="profile-container mb-6">
                <div class="profile-details">
                    <img src="https://www.example.com/profile.jpg" alt="Admin Profile" class="profile-picture">
                    <span class="profile-name">Admin Name</span>
                </div>
            </div>

            <h1 class="text-3xl font-bold mb-4">@yield('title')</h1>
            @yield('content')
        </div>
    </div>

</body>
</html>
