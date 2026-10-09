<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/1', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/nama/{variabel1?}', function ($variabel1 = '') {
    return 'Nama saya: '.$variabel1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa/{params1?}', [MahasiswaController::class, 'show']); 
