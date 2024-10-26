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
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/contact-us', [PagesController::class, 'contact'])->name('contact');
Route::post('/send-mail', function () {
    return back()->with(['success' => 'Message recieved']);
});
Route::post('subscribe', function () {
    return back()->with(['success' => 'Subscription successful']);
})->name('subscribe');
Route::get('storage/{folder}/{img}', [FileController::class, 'show']);
Route::get('lang', [LanguageController::class, 'index'])->name('getLang');
Route::get('lang/{lang}', [LanguageController::class, 'setLang'])->name('setLang');
