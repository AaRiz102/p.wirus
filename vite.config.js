import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/landing/style.css', // Path ke file CSS Anda
        'resources/js/chatbot.js',  // Tambahkan chatbot.js
      ],
      refresh: true,
    }),
  ],
  build: {
    outDir: 'public/build', // Menentukan output direktori build
  },
});
