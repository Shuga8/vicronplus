<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->controller('AuthController')->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('admin.guest');
    Route::post('/auth', 'auth')->name('auth')->middleware('admin.guest');
    Route::get('/logout', 'logout')->name('logout')->middleware('admin');
});

Route::middleware('admin')->controller('AdminController')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});
