<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Auth;

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
Route::group(['middleware' => 'admin'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    // product
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product-update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product-delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('/product-show', [ProductController::class, 'show'])->name('product.show');

    // Product Image
    Route::get('/product-img', [ProductImageController::class, 'index'])->name('product.img');
    Route::get('/product-img-create', [ProductImageController::class, 'create'])->name('product.img.create');
    Route::post('/product-img-store', [ProductImageController::class, 'store'])->name('product.img.store');
    Route::get('/product-img-edit/{id}', [ProductImageController::class, 'edit'])->name('product.img.edit');
    Route::post('/product-img-update/{id}', [ProductImageController::class, 'update'])->name('product.img.update');
    Route::get('/product-img-delete/{id}', [ProductImageController::class, 'destroy'])->name('product.img.delete');

    // Product Category
    Route::get('/product-category', [ProductCategoryController::class, 'index'])->name('product.category');
    Route::get('/product-category-create', [ProductCategoryController::class, 'create'])->name('product.category.create');
    Route::post('/product-category-store', [ProductCategoryController::class, 'store'])->name('product.category.store');
    Route::get('/product-category-edit/{id}', [ProductCategoryController::class, 'edit'])->name('product.category.edit');
    Route::post('/product-category-update/{id}', [ProductCategoryController::class, 'update'])->name('product.category.update');
    Route::get('/product-category-delete/{id}', [ProductCategoryController::class, 'destroy'])->name('product.category.delete');
});
