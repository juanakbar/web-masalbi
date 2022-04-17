<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('portal');
});

// Route::get('/beranda/sejarag', function(){
//     return view('')
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/beranda', [BeritaController::class, 'index']);
Route::get('/profile/sejarah ', [ProfileController::class, 'index'])->name('sejarah');

// Route::get('/beranda', [PrestasiController::class, 'index']);
// Route::get('/beranda', [BeritaController::class, 'prestasi']);
// Route::get('/berita/{berita:slug}', [HomeController::class, 'show']);


// Route::get('/beranda', [PrestasiController::class, 'index']);
// Route::get('/beranda/prestasi', [PrestasiController::class, 'prestasi']);
// Route::get('/berita/{prestasi:slug}', [PrestasiController::class, 'show']);