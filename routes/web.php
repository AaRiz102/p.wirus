<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Models\Vendor;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProductController;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

Route::get('/search', function () {
    $query = request('query');
    // Cari vendor berdasarkan nama
    $vendors = Vendor::where('name', 'like', "%$query%")->get();
    return view('search-results', compact('vendors'));
})->name('search');

Route::get('/vendor', function () {
    return view('vendor');
});

Route::get('/register-vendor', function () {
    return view('register-vendor');
});

Route::post('/vendor/store', [VendorController::class, 'store'])->name('vendor.store');

// Menampilkan daftar produk
Route::get('products', [ProductController::class, 'index'])->name('products.index');

// Menampilkan form untuk menambah produk baru
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Menyimpan produk baru
Route::post('products', [ProductController::class, 'store'])->name('products.store');

