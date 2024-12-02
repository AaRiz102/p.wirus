import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/landing/style.css', // Path ke file CSS Anda
        'resources/js/app.js', // Pastikan juga menambahkan file JS yang relevan
      ],
      refresh: true,
    }),
  ],
  build: {
    outDir: 'public/build', // Menentukan output direktori build
  },
    resolve: {
        alias: {
            '@': '/resources'
        }
    }
});

