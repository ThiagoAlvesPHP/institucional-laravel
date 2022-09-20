<?php

use App\Http\Controllers\AboultController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ConfigController;

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

/**
 * routes pages site
 */
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/mail', [HomeController::class, 'mail'])->name('mail');
});

/**
 * routes pages admin
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::get('/banner', [BannerController::class, 'index'])->name('banner');
    Route::post('/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');

    Route::get('/aboult', [AboultController::class, 'index'])->name('aboult');
    Route::post('/aboult/update/{id}', [AboultController::class, 'update'])->name('aboult.update');

    Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('/project/{id}', [ProjectsController::class, 'project'])->name('project');
    Route::post('/project/update/{id}', [ProjectsController::class, 'update'])->name('project.update');

    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::post('/services/update/{id}', [ServicesController::class, 'update'])->name('services.update');

    Route::get('/products', [AdminController::class, 'index'])->name('products');

    Route::get('/config', [ConfigController::class, 'index'])->name('config');
    Route::post('/config/update/{id}', [ConfigController::class, 'update'])->name('config.update');
    Route::post('/config/metas/register/{id}', [ConfigController::class, 'configMetasRegister'])->name('config.metas.register');
    Route::get('/config/meta/delete/{id}', [ConfigController::class, 'configMetaDelete'])->name('config.meta.delete');

    Route::get('/config/social/status/{id}', [ConfigController::class, 'configSocialUpdateStatus'])->name('condig.social.status');
    Route::get('/config/social/edit/{id}', [ConfigController::class, 'configSocialUpdate'])->name('config.social.edit');

    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

/**
 * route login
 */
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
