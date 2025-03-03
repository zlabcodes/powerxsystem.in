<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductsPageController;
use App\Http\Controllers\ServicesPageController;
use Illuminate\Support\Facades\Route;

Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'show')->name('home');
});

Route::controller(ServicesPageController::class)->group(function () {
    Route::get('/services', 'show')->name('services');
});

Route::controller(ProductsPageController::class)->group(function () {
    Route::get('/products', 'show')->name('products');
});

Route::controller(AboutPageController::class)->group(function () {
    Route::get('/about-us', 'show')->name('about');
});

Route::controller(ContactPageController::class)->group(function () {
    Route::get('/contact', 'show')->name('contact');
});
