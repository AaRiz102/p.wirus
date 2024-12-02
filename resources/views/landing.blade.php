<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Memuat CSS dari Vite -->
    @vite('resources/css/landing/style.css')


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
        <a href="/dashboard" class="btn-start">Mulai</a>
    </div>

    <div class="image-box">
        <img src="https://via.placeholder.com/600x300" alt="Image Showcase">
    </div>

    <div class="search-box">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Cari vendor atau layanan..." value="{{ request('query') }}">
            <button type="submit">Cari</button>
        </form>
    </div>

    <div class="vendor-category">
        <div>Fotografer</div>
        <div>Dekorator</div>
        <div>Tempat Pernikahan</div>
        <div>Musik & Hiburan</div>
    </div>

    <div class="vendor-signup">
        <div class="testimonials-box">
            <div class="testimonial">
                <p>"Layanan sangat profesional! Dekorasi pernikahan kami luar biasa." - <strong>Vendor A</strong></p>
            </div>
            <div class="testimonial">
                <p>"Fotografernya sangat berpengalaman dan hasil fotonya luar biasa!" - <strong>Vendor B</strong></p>
            </div>
            <div class="testimonial">
                <p>"Musiknya membuat acara kami lebih meriah! Terima kasih banyak!" - <strong>Vendor C</strong></p>
            </div>
        </div>

        <div class="signup-button">
            <a href="/register-vendor" class="btn-register">Daftar Jadi Vendor</a>
        </div>
    </div>

    <!-- Chatbot HTML -->
    <div id="chatbot">
        <div id="chatbot-header">
            <h3>Chat with us</h3>
            <button id="chatbot-minimize-btn">-</button>
        </div>
        <div id="chatbot-body">
            <p><strong>Chatbot:</strong> Hello! How can I assist you today?</p>
        </div>
        <input class="chatbot-input" id="chatbot-input" type="text" placeholder="Type your message...">
        <button id="chatbot-send-btn">Send</button>
    </div>

    <!-- Button untuk membuka chatbot -->
    <button class="chatbot-toggle-btn" onclick="toggleChatbot()">💬</button>

    <!-- Script untuk chatbot -->
    <script src="resources/js/chatbot.js"></script>


</body>
</html>
