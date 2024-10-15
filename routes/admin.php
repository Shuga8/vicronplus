<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->controller('AuthController')->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('admin.guest');
    Route::post('/auth', 'auth')->name('auth')->middleware('admin.guest');
    Route::get('/logout', 'logout')->name('logout')->middleware('admin');
});

Route::middleware('admin')->group(function () {
    Route::controller('AdminController')->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });

    Route::prefix('users')->name('users.')->controller('ManageUsersController')->group(function () {
        Route::get('/', 'index')->name('all');
        Route::get('/banned', 'banned')->name('banned');
        Route::get('/active', 'active')->name('active');
        Route::get('/details/{id}', 'details')->name('details');
    });

    Route::prefix("investment-plans")->name('investment.')->controller('InvestmentController')->group(function () {
        Route::get("/", 'index')->name("all");
        Route::post("/store/{id}", 'store')->name("store");
        Route::get("/delete/{id}", 'delete')->name("delete");
    });

    Route::prefix('wallets')->name('wallet.')->controller('WalletController')->group(function () {
        Route::get('/', 'index')->name('all');
    });
});
