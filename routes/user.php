<?php

use Illuminate\Support\Facades\Route;

Route::namespace("Auth")->controller("AuthController")->group(function () {
    Route::get("/login", 'login')->name('login');
    Route::get("/register", 'register')->name('register');
    Route::post("/register", 'registerUser')->name('registerUser');
});
