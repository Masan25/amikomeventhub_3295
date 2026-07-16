<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\AuthController;

// Public Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events/{event}', [\App\Http\Controllers\EventController::class, 'show'])->name('events.show');
Route::get('/checkout/{event}', [\App\Http\Controllers\EventController::class, 'checkout'])->name('checkout');
Route::get('/checkout/{event}', [App\Http\Controllers\CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout/{event}', [App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/payment/{order_id}', [\App\Http\Controllers\CheckoutController::class, 'payment'])->name('checkout.payment');
Route::get('/checkout', function () {
    return redirect()->route('home');
});
Route::get('/my-ticket/{event}', [EventController::class, 'ticket'])->name('ticket');
Route::get('/my-ticket', function () {
    return redirect()->route('home');
});

// Rute tambahan dari tugas awal
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

// Redirect login Laravel ke login admin
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// ADMIN AREA
Route::prefix('admin')->name('admin.')->group(function () {
    // Login (Tanpa Middleware)
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Protected Admin
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('events', EventAdminController::class);
        Route::get('transactions', [\App\Http\Controllers\Admin\TransactionController::class, 'index'])
            ->name('transactions.index');
        Route::resource('categories', AdminCategoryController::class);
        Route::resource('partners', PartnerController::class);
    });
});
