<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;

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

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/mail', [HomeController::class, 'mail'])->name('mail');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::get('/banner', [AdminController::class, 'banner'])->name('banner');
    Route::post('/banner/update', [AdminController::class, 'bannerUpdate'])->name('banner.update');

    Route::get('/aboult', [AdminController::class, 'aboult'])->name('aboult');
    Route::post('/aboult/update', [AdminController::class, 'aboultUpdate'])->name('aboult.update');

    Route::get('/projects', [AdminController::class, 'projects'])->name('projects');

    Route::get('/services', [AdminController::class, 'index'])->name('services');
    Route::get('/products', [AdminController::class, 'index'])->name('products');
    Route::get('/config', [AdminController::class, 'index'])->name('config');
});
