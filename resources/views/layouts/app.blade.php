<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Pastikan file ini ada -->
</head>
<body>
    <div id="app">
        <header>
            <!-- Opsional: Tambahkan navbar di sini -->
        </header>
        <main class="py-4">
            @yield('content') <!-- Area konten dinamis -->
        </main>
        <footer>
            <!-- Footer opsional -->
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script> <!-- Pastikan file ini ada -->
</body>
</html>
