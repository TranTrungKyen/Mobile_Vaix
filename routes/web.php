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
Route::get('/', [UserController::class, 'index'])->name('home');


Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function () {
    Route::get('/category/{id}', 'index')->name('index');
    Route::get('/detail', 'detail')->name('detail');
    Route::get('/search', 'getByCondition')->name('get-by-condition');
});

Route::middleware('authAdmin')->prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->withoutMiddleware('authAdmin')->controller(AdminController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'postLogin')->name('post-login');
    });

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('product')->name('product.')->controller(AdminProductController::class)->group(function () {
        // Route::get('/', 'index')->name('index');
        Route::get('/', 'listDetail')->name('index');
        Route::get('/getData', 'getData')->name('get-data');
        Route::get('/getDataDetail', 'getDataDetail')->name('get-data-detail');
        Route::get('/create/{id?}', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/create-detail/{id?}', 'createDetail')->name('create-detail');
        Route::post('/store/detail', 'storeDetail')->name('store-detail');
        Route::post('/update/{id}/detail', 'updateDetail')->name('update-detail');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/detail/{id}', 'detail')->name('detail');
        Route::post('/delete/{id}', 'delete')->name('delete');
        Route::get('/test', 'test')->name('test');
    });
});
