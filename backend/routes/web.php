<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

Route::prefix('login')->controller(LoginController::class)->group(function () {

	Route::any('/', 'index')->name('login');

});

Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {

	Route::any('/', 'index')->name('dashboard');

});

Route::prefix('product')->name('product')->controller(ProductController::class)->group(function () {

	Route::any('/', 'index')->name('');
	Route::any('/create', 'create')->name('.create');
	Route::any('/edit/{id}', 'edit')->name('.edit');
	Route::any('/volume/{id}', 'volume')->name('.volume.list');
	Route::any('/volume/create', 'volume')->name('.volume.create');
	Route::any('/volume/edit/{id}', 'volume')->name('.volume.edit');

});

Route::fallback(function () {
	return redirect()->route('dashboard');
});