<!-- resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        header {
            background-color: #80CEE1;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        header nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            font-weight: bold;
        }
        header nav a:hover {
            background-color: #80CEE1;
        }
        .hero-section {
            text-align: center;
            padding: 50px;
        }
        .search-box {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .search-box input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 2px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }
        .search-box button {
            padding: 10px 20px;
            background-color: #80CEE1;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .image-box {
            margin-top: 30px;
            width: 100%;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .image-box img {
            width: 100%;
            border-radius: 10px;
        }
        .vendor-category {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 40px;
        }
        .vendor-category div {
            width: 200px;
            height: 200px;
            background-color: #f3f3f3;
            margin: 10px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            color: #80CEE1;
        }

        .vendor-signup {
            background-color: #80CEE1;
            padding: 40px 20px;
            text-align: center;
            width: 100%; /* Memastikan container memenuhi lebar layar */
            max-width: 100%; /* Mencegah konten melampaui lebar layar */
            overflow: hidden; /* Menyembunyikan konten yang melampaui */
        }

        .testimonials-box {
            padding-left: 20px;
            padding-right: 20px;
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
            width: 100%;
            max-width: 100%; /* Mencegah konten melampaui lebar layar */
            overflow: hidden; /* Menyembunyikan konten yang melampaui */
        }

        .testimonial:first-child {
            padding-left: 20px; /* Menambah padding di sisi kiri kotak testimonial pertama */
        }

        .testimonial {
            background-color: #88f34f; /* Warna biru untuk kotak testimoni */
            color: white;
            padding: 20px;
            width: 30%; /* Lebar kotak testimoni */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            word-wrap: break-word;
            overflow-wrap: break-word;
            padding-left: 20px; /* Menambah padding kiri di semua kotak testimonial */
        }


        .testimonial p {
            font-size: 16px;
        }

        .testimonial strong {
            font-weight: bold;
        }

        .signup-button {
            margin-top: 20px;
        }

        .btn-register {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .btn-register:hover {
            background-color: #45a049;
        }


    </style>
</head>
<body>
    <header>
        <div>
            <h1>Wedding Platform</h1>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/services">Services</a>
                <a href="/contact">Contact</a>
            </nav>
        </div>
    </header>

    <div class="hero-section">
        <h2>Selamat datang di Wedding Platform</h2>
        <p>Temukan berbagai vendor pernikahan terbaik di sini</p>
        <a href="/dashboard" style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Mulai</a>
    </div>

    <!-- Kotak Gambar -->
    <div class="image-box">
        <img src="https://via.placeholder.com/600x300" alt="Image Showcase">
    </div>

    <!-- Sistem Pencarian -->
    <div class="search-box">
        <form action="{{ route('search') }}" method="GET" class="search-box">
            <input type="text" name="query" placeholder="Cari vendor atau layanan..." value="{{ request('query') }}">
            <button type="submit">Cari</button>
        </form>
    </div>

    <!-- Vendor Categories -->
    <div class="vendor-category">
        <div>Fotografer</div>
        <div>Dekorator</div>
        <div>Tempat Pernikahan</div>
        <div>Musik & Hiburan</div>
    </div>

    <!-- Kotak Testimoni dan Tombol Daftar Vendor -->
    <div class="vendor-signup">
        <div class="testimonials-box">
            <div class="testimonial">
                <p>"Layanan sangat proaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaafesional! Dekorasi pernikahan kami luar biasa." - <strong>Vendor A</strong></p>
            </div>
            <div class="testimonial">
                <p>"Fotografernya sangat berpengalaman dan hasil fotonya luar biasa!" - <strong>Vendor B</strong></p>
            </div>
            <div class="testimonial">
                <p>"Musiknya membuat acara kami lebih meriah! Terima kasih banyak!" - <strong>Vendor C</strong></p>
            </div>
        </div>

        <!-- Tombol Daftar Jadi Vendor -->
        <div class="signup-button">
            <a href="/register-vendor" class="btn-register">Daftar Jadi Vendor</a>
        </div>
    </div>


</body>
</html>
