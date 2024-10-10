<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->controller('AuthController')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/auth', 'auth')->name('auth');
});

Route::controller('AdminController')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});
