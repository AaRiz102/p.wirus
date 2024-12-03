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
            <a href=/vendors>Daftar Mitra</a>
        </nav>
    </header>



    <div class="image-box">
        <img src="/images/bg.jpg" alt="Image Showcase">
        <div class="text-overlay">Solusi Terlengkap untuk Dekorasi Pernikahan Impian Anda di Indonesia</div>
    </div>


    <div id="services" class="vendor-category">
        <section class="services-section">
            <h2>Services</h2>
            <a href="https://www.instagram.com/afifahbackdrop/" target="_blank" class="vendor-item">
                <div>
                    <img src="{{ asset('images/dekor.png') }}" alt="Dekor" style="max-width: 100%; height: 100%;">
                    <p class="image-caption">Dekorasi</p>
                </div>
            </a>
            <a href="https://www.instagram.com/afifahhenna.jakarta/" target="_blank" class="vendor-item">
                <div>
                    <img src="{{ asset('images/hena.png') }}" alt="Hena" style="max-width: 100%; height: 100%;">
                    <p class="image-caption">Hena</p>
                </div>
            </a>
            <a href="https://www.instagram.com/afifah_souvenir/" target="_blank" class="vendor-item">
                <div>
                    <img src="{{ asset('images/sovenir.png') }}" alt="Sovenir" style="max-width: 100%; height: 100%;">
                    <p class="image-caption">Sovenir</p>
                </div>
            </a>
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

    <!-- Chatbot Integration -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const suggestionBox = document.createElement('div');
            suggestionBox.setAttribute('id', 'suggestion-box');
            suggestionBox.style.position = 'absolute';
            suggestionBox.style.backgroundColor = '#fff';
            suggestionBox.style.border = '1px solid #ccc';
            suggestionBox.style.zIndex = '1000';
            suggestionBox.style.display = 'none';
            suggestionBox.style.maxHeight = '150px';
            suggestionBox.style.overflowY = 'auto';
            document.body.appendChild(suggestionBox);

            const commands = [
                { command: '/hi', description: 'Menyapa bot' },
                { command: '/reservasi', description: 'Informasi reservasi' },
                { command: '/daftar_mitra', description: 'Informasi pendaftaran mitra' },
                { command: '/perintah', description: 'Menampilkan daftar perintah' }
            ];

            // Tunggu hingga widget Botman selesai dimuat
            const intervalId = setInterval(() => {
                const inputField = document.querySelector('.botman-chat-input');

                if (inputField) {
                    clearInterval(intervalId);

                    inputField.addEventListener('keyup', function (e) {
                        const inputValue = inputField.value;

                        if (inputValue.startsWith('/')) {
                            suggestionBox.innerHTML = '';
                            suggestionBox.style.display = 'block';
                            suggestionBox.style.left = inputField.getBoundingClientRect().left + 'px';
                            suggestionBox.style.top = (inputField.getBoundingClientRect().top - 180) + 'px'; // Penyesuaian posisi agar terlihat di atas input

                            commands.forEach(cmd => {
                                if (cmd.command.startsWith(inputValue)) {
                                    const suggestionItem = document.createElement('div');
                                    suggestionItem.innerHTML = `<b>${cmd.command}</b> - ${cmd.description}`;
                                    suggestionItem.style.padding = '8px';
                                    suggestionItem.style.cursor = 'pointer';

                                    suggestionItem.addEventListener('click', function () {
                                        inputField.value = cmd.command;
                                        suggestionBox.style.display = 'none';
                                        inputField.focus();
                                    });

                                    suggestionBox.appendChild(suggestionItem);
                                }
                            });
                        } else {
                            suggestionBox.style.display = 'none';
                        }
                    });

                    document.addEventListener('click', function (e) {
                        if (!suggestionBox.contains(e.target) && e.target !== inputField) {
                            suggestionBox.style.display = 'none';
                        }
                    });
                }
            }, 500);
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
