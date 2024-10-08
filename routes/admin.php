<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->controller('AuthController')->group(function () {
    Route::get('', 'login')->name('login');
});

Route::controller('AdminController')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});
