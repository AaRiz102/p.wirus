<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afifah Backdrop</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Memuat CSS dari Vite -->
    @vite('resources/css/landing/style.css')

    <!-- Botman Web Widget -->
    <script>
        var botmanWidget = {
            introMessage: "Halo! Ada yang bisa saya bantu hari ini?",
            title: "AFIFAH BACKDROP",
            placeholderText: "Ketik pesan Anda...",
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>
</head>
<body>
    <header>
        <div class="header-container">
            <img src="/images/logo.png" alt="Moon Icon" class="moon-icon">
            <h1>AFIFAH BACKDROP</h1>
        </div>
        <nav>
            <a href="/">Home</a>
            <a href="#services">Services</a>
            <a href="#footer">Contact</a>
        </nav>
    </header>



    <div class="image-box">
        <img src="/images/bg.jpg" alt="Image Showcase">
        <div class="text-overlay">Solusi Terlengkap untuk Dekorasi Pernikahan Impian Anda di Indonesia</div>
    </div>


    <div id="services" class="vendor-category">
        <section class="services-section">
            <h2>Services</h2>
            <div class="vendor-item">
                <img src="{{ asset('images/dekor.png') }}" alt="Dekor" style="max-width: 100%; height: 100%;">
                <p class="image-caption">Dekorasi</p>
            </div>
            <div class="vendor-item">
                <img src="{{ asset('images/hena.png') }}" alt="Hena" style="max-width: 100%; height: 100%;">
                <p class="image-caption">Hena</p>
            </div>
            <div class="vendor-item">
                <img src="{{ asset('images/sovenir.png') }}" alt="Sovenir" style="max-width: 100%; height: 100%;">
                <p class="image-caption">Sovenir</p>
            </div>
        </section>
    </div>

    <div class="vendor-signup">
        <div class="testimonials-box">
            <div class="testimonial-group">
                <div class="caption">Testimoni</div>
                <div class="testimonial">
                    <p>"Aku suka dekorasinya, sovenirnya juga cantik. Makasih ka semoga sukses terus ya. ❤️" - <strong>Klien A</strong></p>
                </div>
            </div>
            <div class="testimonial-group">
                <div class="caption">Testimoni</div>
                <div class="testimonial">
                    <p>"Makasih banyak aku suka banget dekorasinya banyak yang bilang bagus banget ka!!!" - <strong>Klien B</strong></p>
                </div>
            </div>
            <div class="testimonial-group">
                <div class="caption">Testimoni</div>
                <div class="testimonial">
                    <p>"H-1 acara akad nikah bingung krn backdrop cancel sepihak dengan alasannya. Browsing2 cari jasa penyewaan backdrop match dengan Afifah Souvenir dan ownernya mbak pipah fast respon banget. Siang itu juga langsung deal dan sorenya dipasang. Pelayanan prima owner nya langsung turun tangan. Fast respon dan ramah banget ownernya. Sukses selalu untuk bisnisnya mbak pipah. 😁" - <strong>Klien C</strong></p>
                </div>
            </div>
        </div>
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

    <footer id="footer" class="footer">
        <div class="footer-content">
            <p>&copy; 2024 Afifah Backdrop Pernikahan. All Rights Reserved.</p>
            <div class="contact-info">
                <p><strong>Kontak:</strong> <a href="https://wa.me/6285888027756" target="_blank">+62 858 8802 7756</a></p>
                <p><strong>Instagram:</strong> <a href="https://www.instagram.com/afifahbackdrop/" target="_blank">@afifah_backdrop</a></p>
                <p><strong>Alamat:</strong> Jl. Bona No.52, RT.11/RW.3, Penggilingan, Kec. Cakung, Jakarta, Daerah Khusus Ibukota Jakarta 13940, Cakung, Indonesia 13940 </p>
            </div>
        </div>
    </footer>


</body>
</html>
