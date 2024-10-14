<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\User\ProductController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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
Route::name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('home');

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/detail', [ProductController::class, 'detail'])->name('detail');
    });
});

Route::middleware('authAdmin')->prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->withoutMiddleware('authAdmin')->group(function () {
        Route::get('/login', [AdminController::class, 'login'])->name('login');
        Route::post('/login', [AdminController::class, 'postLogin'])->name('post-login');
    });

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('product')->name('product.')->group(function () {
        // Route::get('/', [AdminProductController::class, 'index'])->name('index');
        Route::get('/', [AdminProductController::class, 'listDetail'])->name('index');
        Route::get('/getData', [AdminProductController::class, 'getData'])->name('get-data');
        Route::get('/getDataDetail', [AdminProductController::class, 'getDataDetail'])->name('get-data-detail');
        Route::get('/create/{id?}', [AdminProductController::class, 'create'])->name('create');
        Route::post('/store', [AdminProductController::class, 'store'])->name('store');
        Route::get('/create-detail/{id?}', [AdminProductController::class, 'createDetail'])->name('create-detail');
        Route::post('/store/detail', [AdminProductController::class, 'storeDetail'])->name('store-detail');
        Route::post('/update/{id}/detail', [AdminProductController::class, 'updateDetail'])->name('update-detail');
        Route::post('/update/{id}', [AdminProductController::class, 'update'])->name('update');
        Route::get('/detail/{id}', [AdminProductController::class, 'detail'])->name('detail');
        Route::post('/delete/{id}', [AdminProductController::class, 'delete'])->name('delete');
    });
});
