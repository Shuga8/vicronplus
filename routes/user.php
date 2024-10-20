<?php

use Illuminate\Support\Facades\Route;

Route::namespace("Auth")->controller("AuthController")->group(function () {
    Route::get("/login", 'login')->name('login');
    Route::get("/register", 'register')->name('register');
    Route::post("/login", 'loginUser')->name('loginUser');
    Route::post("/register", 'registerUser')->name('registerUser');
    Route::get('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::controller('UsersController')->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });

    Route::prefix('investment')->name('investment.')->controller('InvestmentController')->group(function () {
        Route::get('new', 'new')->name('new');
        Route::get('log', 'log')->name('log');
        Route::post('store', 'store')->name('store');
    });

    Route::prefix('deposits')->name('deposit.')->controller('DepositController')->group(function () {
        Route::get('new', 'index')->name('new');
        Route::get('log', 'log')->name('log');
        Route::post('store', 'store')->name('store');
    });
});
