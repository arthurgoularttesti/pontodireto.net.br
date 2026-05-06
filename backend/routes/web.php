<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

Route::prefix('login')->controller(LoginController::class)->group(function () {

	Route::any('/', 'index')->name('login');

});

Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {

	Route::any('/', 'index')->name('home');

});

Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function () {

	Route::any('/', 'index')->name('list');
	Route::any('/', 'create')->name('create');
	Route::any('/', 'edit')->name('edit');
	Route::any('/', 'volume')->name('volume');

});

Route::fallback(function () {
	return redirect('login');
});