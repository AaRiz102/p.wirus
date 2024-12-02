<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\VendorController;
use App\Models\Vendor;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Web\WebDriver;

// Route untuk halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route untuk halaman home
Route::get('/home', function () {
    return view('home');
});

// Route untuk landing page
Route::get('/', [LandingPageController::class, 'index']);

// Route untuk halaman login
Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

// Route untuk fitur pencarian vendor
Route::get('/search', function () {
    $query = request('query');
    $vendors = Vendor::where('name', 'like', "%$query%")->get();
    return view('search-results', compact('vendors'));
})->name('search');

// Route untuk halaman vendor
Route::get('/vendor', function () {
    return view('vendor');
});

// Route untuk halaman pendaftaran vendor
Route::get('/register-vendor', function () {
    return view('register-vendor');
});

// Route untuk menyimpan data vendor baru
Route::post('/vendor/store', [VendorController::class, 'store'])->name('vendor.store');

// Route untuk chatbot handler (dengan middleware login)
Route::middleware(['auth'])->group(function () {
    Route::post('/botman', function () {
        DriverManager::loadDriver(WebDriver::class);

        $config = [];
        $botman = BotManFactory::create($config);

        $botman->hears('Hi', function (BotMan $bot) {
            $bot->reply('Halo! Selamat datang di Afifah Backdrop.');
        });

        $botman->hears('Reservasi', function (BotMan $bot) {
            $bot->reply('Anda dapat membuat reservasi di sini: [Reservasi Perbaikan](#)');
        });

        $botman->hears('.*', function (BotMan $bot) {
            $bot->reply('Maaf, saya tidak memahami pertanyaan Anda.');
        });

        $botman->listen();
    });
});

// Route untuk menampilkan UI chatbot
Route::get('/chat', function () {
    if (!auth()->check()) {
        return redirect('/login')->with('error', 'Silakan login untuk menggunakan chatbot.');
    }
    return view('chat');
});
