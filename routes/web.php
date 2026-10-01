<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'nama' => 'Reyfandi Abdillah Ilham',
        'matakuliah' => 'Pemrograman Web',
        'semester' => 3,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'judul' => 'Tentang Saya',
        'deskripsi' => 'Mahasiswa Ilmu Komputer yang sedang mempelajari Laravel.',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'email' => 'email@example.com',
        'telepon' => '08xxxxxxxxxx',
    ]);
});