<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->balance = json_decode($user->balance, true);

        $data = [
            'title' => 'Dashboard',
            'user' => $user
        ];

        return view('users.dashboard')->with($data);
    }
}
