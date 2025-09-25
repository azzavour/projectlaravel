<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- RUTE LAMA ANDA ---
Route::get('/', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');


// --- TAMBAHKAN RUTE BARU UNTUK BOOKING SMARTPHONE DI BAWAH INI ---

// Rute untuk menampilkan semua smartphone
Route::get('/smartphones', [PageController::class, 'showSmartphones'])->name('smartphones.index');

// Rute untuk menampilkan detail satu smartphone
Route::get('/smartphones/{id}', [PageController::class, 'showSmartphoneDetail'])->name('smartphones.show');

// Rute untuk memproses booking (menggunakan POST)
Route::post('/smartphones/{id}/book', [PageController::class, 'bookSmartphone'])->name('smartphones.book');

Route::post('/smartphones/{id}/cancel', [PageController::class, 'cancelBooking'])->name('smartphones.cancel');