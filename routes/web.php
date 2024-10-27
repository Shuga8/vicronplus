<?php

use App\Jobs\ProccessContract;
use App\Models\Subscriber;
use App\Jobs\SubcriptionJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\LanguageController;

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
Route::post('/send-mail', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'firstname' => ['required', 'string'],
        'lastname' => ['required', 'string'],
        'email' => ['required', 'string', 'email'],
        'subject' => ['required', 'string'],
        'message' => ['required']
    ]);

    if ($validator->fails()) {
        return back()->with(['error' => $validator->errors()->first()]);
    }

    $data = [
        'firstname' => $request->input('firstname'),
        'lastname' => $request->input('lastname'),
        'email' => $request->input('email'),
        'subject' => $request->input('subject'),
        'message' =>  nl2br($request->message)
    ];

    dispatch(new ProccessContract($data));

    return back()->with(['success' => 'your message was recieved.']);
});
Route::post('subscribe', function (Request $request) {

    $validator = Validator::make($request->all(), ['email' => ['required', 'string', 'email', 'unique:subscribers,email']]);

    if ($validator->fails()) {
        return back()->with(['error' => $validator->errors()->first()]);
    }

    $subscriber = new Subscriber();
    $subscriber->email = $request->input('email');
    $subscriber->save();

    dispatch(new SubcriptionJob($request->input('email')));

    return back()->with(['success' => 'subscribtion is being reviewed']);
})->name('subscribe');
Route::get('storage/{folder}/{img}', [FileController::class, 'show']);
Route::get('lang', [LanguageController::class, 'index'])->name('getLang');
Route::get('lang/{lang}', [LanguageController::class, 'setLang'])->name('setLang');
