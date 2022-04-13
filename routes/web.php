<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('portal');
});

// Route::get('/beranda', function () {
//     return view('website.home',[
//         "title"=>"Home",
//     ]);
// });

Route::get('/beranda/berita', function () {
    return view('website.berita', [
        "title" => "Berita"
    ] );
});

Route::get('/beranda', [BeritaController::class, 'index']);
Route::get('/beranda/berita', [BeritaController::class, 'berita']);
