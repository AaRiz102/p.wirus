<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backdrop Collection</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Afifah Backdrop Pernikahan</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Backdrops</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="backdrops-section">
        <div class="container">
            <h2>Our Backdrops Collection</h2>
            <div class="backdrop-grid">
                @foreach ($backdrops as $backdrop)
                    <div class="backdrop-card">
                        <img src="{{ asset('images/' . $backdrop->image) }}" alt="{{ $backdrop->name }}">
                        <div class="card-details">
                            <h3>{{ $backdrop->name }}</h3>
                            <p>{{ $backdrop->description }}</p>
                            <p class="price">Rp {{ number_format($backdrop->price, 0, ',', '.') }}</p>
                            <button class="btn-add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Afifah Backdrop Pernikahan</p>
        </div>
    </footer>
</body>
</html>
