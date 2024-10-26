<?php

namespace App\Http\Controllers;

use App\Models\Investment;

class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'plans' => Investment::all()
        ];

        return view('index')->with($data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];

        return view('about')->with($data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us'
        ];

        return view('contact')->with($data);
    }
}
