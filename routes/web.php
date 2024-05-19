<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [HomeController::class, 'index']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'Tentang']);
});

Route::get('/katalog', function () {
    return view('katalog', ['title' => 'Katalog']);
});

Route::get('/lokasi', function () {
    return view('lokasi', ['title' => 'Lokasi']);
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
