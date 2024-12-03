<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary text-white p-3">
        <h1 class="text-center">Daftar Mitra</h1>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-light text-center py-3 mt-auto">
        <p>&copy; 2024 Daftar Mitra. All rights reserved.</p>
    </footer>
</body>
</html>
