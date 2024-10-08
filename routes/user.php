<?php

use Illuminate\Support\Facades\Route;

Route::namespace("Auth")->controller("AuthController")->group(function () {
    Route::get("/login", 'login')->name('login');
    Route::get("/register", 'register')->name('register');
    Route::post("/login", 'loginUser')->name('loginUser');
    Route::post("/register", 'registerUser')->name('registerUser');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller('UsersController')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});
