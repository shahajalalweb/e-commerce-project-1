<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// menu routing
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');
Route::get('/menu/delete/{id}', [MenuController::class, 'destroy'])->name('menu.delete');

// category routing
Route::get('/products/category', [CategoryController::class, 'index'])->name('category');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');

// product routing
Route::get('/products/add', [ProductController::class, 'create'])->name('add-product');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/view', [ProductController::class, 'index'])->name('view-products');
Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

// user controller
Route::get('/user', [HomeController::class, 'index'])->name('user.home');
Route::get('/user/card/{id}', [HomeController::class, 'card'])->name('user.card');
Route::get('/user/product/details', [HomeController::class, 'details'])->name('user.details');
Route::get('/user/product/details/{id}', [HomeController::class, 'detailsProduct'])->name('product.details');
Route::post('/user/add/cart', [HomeController::class, 'addToCart'])->name('add.cart');
Route::get('/user/checkout/{id}', [HomeController::class, 'checkout'])->name('checkout');


// check only cart
Route::get('/user/cart/check', [HomeController::class, 'CheckCart'])->name('check.cart');


