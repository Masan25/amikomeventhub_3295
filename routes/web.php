<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa', function () {
    return 'I Komang Sandy Hare Nandhana - 24.12.3295';
});

Route::get('/', function () {
    return view('welcome');
});
