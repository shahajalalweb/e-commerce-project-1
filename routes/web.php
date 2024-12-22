<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.dashboard.dashboard');
})->name('dashboard');

Route::get('/products', function () {
    return view('pages.products.products');
})->name('products');


