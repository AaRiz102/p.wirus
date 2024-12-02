<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Memuat CSS dari Vite -->
    @vite('resources/css/landing/style.css')

    <!-- Botman Web Widget -->
    <script>
        var botmanWidget = {
            introMessage: "Halo! Ada yang bisa saya bantu hari ini?",
            title: "AFIFAH BACKDROP",
            placeholderText: "Ketik pesan Anda...",
            aboutText: "Powered by BotMan"
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>
</head>
<body>
    <header>
        <div>
            <h1>AFIFAH BACKDROP</h1>
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
        {{-- <a href="/dashboard" style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Mulai</a> --}}
    </div>

    <div class="image-box">
        <img src="https://via.placeholder.com/600x300" alt="Image Showcase">
    </div>

    <div class="vendor-category">
        <div>Dekorasi</div>
        <div>HEINA</div>
        <div>souvenir</div>
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

    <!-- Chatbot Integration -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Memuat validasi login untuk chatbot...');
            const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};

            // Tambahkan interval untuk menunggu elemen ikon chatbot
            const intervalId = setInterval(() => {
                const chatbotIcon = document.querySelector('.botman-chat-widget-launcher'); // Ikon chatbot

                if (chatbotIcon) {
                    console.log('Ikon chatbot ditemukan.');
                    clearInterval(intervalId); // Hentikan interval setelah ikon ditemukan

                    // Tambahkan event listener untuk klik
                    chatbotIcon.addEventListener('click', function (event) {
                        console.log('Ikon chatbot diklik.');

                        // Jika pengguna belum login
                        if (!isLoggedIn) {
                            event.preventDefault(); // Mencegah widget terbuka
                            alert('Silakan login terlebih dahulu untuk menggunakan chatbot.');
                            window.location.href = '/login'; // Arahkan ke halaman login
                        } else {
                            console.log('Pengguna sudah login. Chatbot akan dibuka.');
                        }
                    });
                }
            }, 500); // Periksa setiap 500ms
        });
    </script>
</body>
</html>
