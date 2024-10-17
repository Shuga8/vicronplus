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
}
