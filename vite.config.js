import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/js/app.js',
        'resources/css/app.css',
      ],
      refresh: true,
    }),
  ],
  build: {
    outDir: 'public/build',  // Menentukan folder output
    manifest: true,  // Mengaktifkan pembuatan file manifest
    rollupOptions: {
      input: {
        app: 'resources/js/app.js',  // Sesuaikan dengan input Anda
      },
    },
  },
});
