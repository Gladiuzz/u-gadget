<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// product
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product-edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product-update', [ProductController::class, 'update'])->name('product.update');
Route::get('/product-delete', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/product-show', [ProductController::class, 'show'])->name('product.show');
