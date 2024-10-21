<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::post('/send-mail', function () {});
Route::post('subscribe', function () {});
Route::get('storage/{folder}/{img}', [FileController::class, 'show']);
Route::get('lang', [LanguageController::class, 'index'])->name('getLang');
Route::get('lang/{lang}', [LanguageController::class, 'setLang'])->name('setLang');
