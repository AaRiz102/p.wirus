<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackdropController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('dashboard  ');
});

Route::get('/backdrops', [BackdropController::class, 'index']);
