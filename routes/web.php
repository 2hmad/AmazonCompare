<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'check'])->name('login-account');

    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register'])->name('register-acc');

    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/profile', [ProfileController::class, 'index']);

    Route::get('/product/{id}', [ProductController::class, 'index']);
    Route::post('/product/{id}/{email}', [ProductController::class, 'addFavorite'])->name('addfavorite');
    Route::delete('/product/{id}/{email}', [ProductController::class, 'deleteFavorite'])->name('destroy.favorite');

    Route::get('/favorite', [FavoriteController::class, 'index']);
    Route::get('/search', function () {
        return view('search');
    });
});
