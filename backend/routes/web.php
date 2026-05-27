<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;

Route::prefix('login')->controller(LoginController::class)->group(function () {

	Route::any('/', 'index')->name('login');
	Route::any('/logout', 'logout')->name('logout');

});

Route::middleware('auth')->prefix('dashboard')->controller(DashboardController::class)->group(function () {

	Route::any('/', 'index')->name('dashboard');

});

Route::middleware('auth')->prefix('product')->name('product')->controller(ProductController::class)->group(function () {

	Route::any('/', 'index')->name('');
	Route::any('/create', 'create')->name('.create');
	Route::any('/edit/{id}', 'edit')->name('.edit');
	Route::any('/volume/{id}', 'volume')->name('.volume.list');
	Route::any('/volume/create/{id}', 'volume')->name('.volume.create');
	Route::any('/volume/edit/{id}', 'volume')->name('.volume.edit');

});

Route::middleware('auth')->prefix('client')->name('client')->controller(ClientController::class)->group(function () {

	Route::any('/', 'index')->name('');
	Route::any('/create', 'create')->name('.create');
	Route::any('/edit/{id}', 'edit')->name('.edit');

});

Route::middleware('auth')->prefix('stock')->name('stock')->controller(StockController::class)->group(function () {

	Route::any('/', 'index')->name('');
	Route::any('/create', 'create')->name('.create');
	Route::any('/edit/{id}', 'edit')->name('.edit');

});

Route::middleware('auth')->prefix('financial')->name('financial')->controller(FinancialController::class)->group(function () {

	Route::any('/', 'index')->name('');
	Route::any('/create', 'create')->name('.create');
	Route::any('/edit/{id}', 'edit')->name('.edit');

});

Route::fallback(function () {
	return redirect()->route('dashboard');
});