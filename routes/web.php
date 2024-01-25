<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VillageGovernmentController;

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
Route::get('/category/{category:nama}', [HomeController::class, 'showByCategory']);
Route::get('/author/{user:name}', [HomeController::class, 'showByAuthor']);
Route::get('/year/{year}', [HomeController::class, 'showByYear']);
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
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);


// ADMIN
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/dashboard/posts', PostController::class);

Route::resource('/dashboard/categories', CategoryController::class);

Route::resource('/dashboard/village-governments', VillageGovernmentController::class);
Route::post('/village-governments/custom-sortable', [VillageGovernmentController::class, 'updateOrder']);


Route::get('/dashboard/users', [UserController::class, 'index']);
