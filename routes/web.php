<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackdropController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/backdrops', [BackdropController::class, 'index']);
