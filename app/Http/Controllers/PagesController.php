<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];

        return view('index')->with($data);
    }
}
