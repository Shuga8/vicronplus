<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;



class LanguageController extends Controller
{
    public function index() {}

    public function setLang($lang = 'en-uk')
    {
        App::setLocale($lang);
        session()->put('locale', $lang);

        return back()->with(['success' => 'Language changed successfully']);
    }
}
