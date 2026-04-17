<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '
    <html>
    <head>
        <title>Home - AmikomEventHub</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-slate-100 min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-2xl shadow-lg text-center max-w-xl w-full">
            <h1 class="text-3xl font-bold text-slate-800 mb-4">Selamat Datang di AmikomEventHub</h1>
            <p class="text-slate-600 mb-6">Website sederhana Laravel untuk navigasi halaman statis.</p>
            <div class="flex flex-wrap gap-3 justify-center">
                <a href="/" class="bg-slate-700 text-white px-4 py-2 rounded-lg hover:bg-slate-800 transition">Home</a>
                <a href="/profil" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Profil</a>
                <a href="/katalog" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition">Katalog</a>
                <a href="/bantuan" class="bg-amber-500 text-white px-4 py-2 rounded-lg hover:bg-amber-600 transition">Bantuan</a>
                <a href="/kontak" class="bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition">Kontak</a>
            </div>
        </div>
    </body>
    </html>
    ';
});

Route::get('/tentang', function () {
    return '<h1>Ini adalah Halaman Tentang Aplikasi Event Hub</h1>';
});

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});
