<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Login;

Route::prefix('login')->controller(Login::class)->group(function () {

	Route::any('/', 'index')->name('login');

});

Route::prefix('dashboard')->controller(Dashboard::class)->group(function () {

	Route::any('/', 'index')->name('home');

});

Route::fallback(function () {
	return redirect('login');
});