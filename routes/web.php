<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; // <--- PASTIKAN BARIS INI ADA!

/* Jika baris di atas tidak ada, Laravel tidak kenal siapa itu PageController
   dan akan menampilkan layar putih (error fatal).
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produk', [PageController::class, 'products'])->name('products');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');