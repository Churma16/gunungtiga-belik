<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail-post/{post:slug}', [HomeController::class, 'detailPost']);


Route::get('/test', function () {
    return view('user.about-us');
});

Route::prefix('profil-desa')->group(function () {
    Route::get('/sejarah-desa', function () {
        return view('user.profil-desa.sejarah-desa');
    });

    Route::get('/visi-misi-desa', function () {
        return view('user.profil-desa.visi-misi-desa');
    });

    Route::get('/demografi-desa', function () {
        return view('user.profil-desa.demografi-desa');
    });
});


Route::prefix('kelembagaan')->group(function () {
    Route::get('/pemerintah-desa', function () {
        return view('user.kelembagaan.pemerintah-desa');
    });

    Route::get('/bpd', function () {
        return view('user.kelembagaan.bpd');
    });

    Route::get('/lpmd', function () {
        return view('user.kelembagaan.lpmd');
    });

    Route::get('/pkk', function () {
        return view('user.kelembagaan.pkk');
    });

    Route::get('/karang-taruna', function () {
        return view('user.kelembagaan.karang-taruna');
    });
});

Route::get('/peta-desa', function () {
    return view('user.peta-desa');
});

Route::get('/berita-desa', function () {
    return view('user.berita-desa');
});




// AUTH
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login']);


// ADMIN
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/posts', PostController::class);
