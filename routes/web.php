<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::prefix('product')->name('product.')->group(function () {
    Route::get('/', [ProductController::class, 'list'])->name('list');
    Route::post('/', [ProductController::class, 'list'])->name('list');
    Route::get('/create', [ProductController::class, 'add'])->name('create');
    Route::post('/create', [ProductController::class, 'add'])->name('create');
    Route::get('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
});
