<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Login;

Route::prefix('login')->controller(Login::class)->group(function () {

	Route::any('/', 'index');

});

Route::fallback(function () {
	return redirect('login');
});