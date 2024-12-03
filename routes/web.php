<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BotManController;
use BotMan\BotMan\BotManFactory;
use BotMan\Drivers\Web\WebDriver;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Berikut adalah definisi rute untuk aplikasi Anda. Semua rute ditempatkan
| dalam grup sesuai dengan fungsinya untuk menjaga keteraturan dan kemudahan
| pengelolaan kode.
|
*/

// Halaman utama (landing page)
Route::get('/', [LandingPageController::class, 'index']);

// Halaman dashboard (hanya untuk pengguna yang login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

// Halaman home (dapat diakses siapa saja)
Route::get('/home', function () {
    return view('home');
});

// Halaman login
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

// Chatbot BotMan handler
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle'])->name('botman.handle');

// UI chatbot (hanya bisa diakses oleh pengguna yang login)
Route::get('/chat', function () {
    if (!auth()->check()) {
        return redirect('/login')->with('error', 'Silakan login untuk menggunakan chatbot.');
    }
    return view('chat');
})->name('chat');

// Menampilkan daftar vendor dan form registrasi vendor
Route::get('/vendors', [VendorController::class, 'index'])->name('vendor.index');

// Menyimpan data vendor baru
Route::post('/vendors', [VendorController::class, 'store'])->name('vendor.store');

/*
|--------------------------------------------------------------------------
| BotMan Chatbot Logic
|--------------------------------------------------------------------------
| Logika chatbot menggunakan middleware login untuk memastikan hanya pengguna
| yang telah login yang dapat mengakses fungsi chatbot.
|
*/
Route::middleware(['auth'])->group(function () {
    Route::post('/botman', function () {
        // Muat driver BotMan
        DriverManager::loadDriver(WebDriver::class);

        // Konfigurasi chatbot
        $config = [];
        $botman = BotManFactory::create($config);

        // Respon untuk "Hi"
        $botman->hears('Hi', function ($bot) {
            $bot->reply('Halo! Selamat datang di Afifah Backdrop.');
        });

        // Respon untuk "Reservasi"
        $botman->hears('Reservasi', function ($bot) {
            $bot->reply('Anda dapat membuat reservasi di sini: [Reservasi Perbaikan](#)');
        });

        // Respon default untuk input lain
        $botman->hears('.*', function ($bot) {
            $bot->reply('Maaf, saya tidak memahami pertanyaan Anda.');
        });

        $botman->listen();
    });
});

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

