<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// category routing
Route::get('/products/category', [CategoryController::class, 'index'])->name('category');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::get('/products/add', [ProductController::class, 'create'])->name('add-product');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/view', [ProductController::class, 'index'])->name('view-products');
Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

// user controller
Route::get('/user', [HomeController::class, 'index'])->name('user.home');
