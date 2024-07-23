<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('{id}/product', [HomeController::class, 'detail'])->name('detail');

Route::get('/product', [HomeController::class , 'menu'])->name('product');

Route::prefix('admin')->as('admin.')->group(function () {
    Route::prefix('books')->as('books.')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('index');
        Route::get('{id}/findbycate', [BookController::class, 'findbycate'])->name('findbycate');
        Route::get('{id}/show', [BookController::class, 'show'])->name('show');
        Route::get('create', [BookController::class, 'create'])->name('create');
        Route::post('store', [BookController::class, 'store'])->name('store');
        Route::get('{id}/edit', [BookController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [BookController::class, 'update'])->name('update');
        Route::delete('{id}/destroy', [BookController::class, 'destroy'])->name('destroy');
    });
});


Route::get('/cate', [CategoryController::class, 'index']);

