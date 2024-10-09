<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];

        return view('users.dashboard')->with($data);
    }
}
