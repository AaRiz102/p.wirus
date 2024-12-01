<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('dashboard  ');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('/login', [AuthController::class, 'loginPage'])->name('login');

