<?php

namespace App\Http\Controllers\Users\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            "title" => "Login"
        ];

        return view("users.auth.login")->with($data);
    }

    public function register()
    {
        $data = [
            "title" => "Sign Up"
        ];

        return view("users.auth.register")->with($data);
    }

    public function registerUser(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'username' => ['required', 'string', 'unique:users,username'],
            'password' => ['required', 'string', 'confirmed']
        ]);
    }
}
