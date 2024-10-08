<?php

namespace App\Http\Controllers\Users\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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

        try {
            DB::beginTransaction();
            $user = User::create([
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
            DB::commit();
            return to_route("user.login")->with(['success' => 'Registration successfull, you can now login']);
        } catch (\Exception $e) {
            DB::rollBack();
            return to_route("user.register")->with(['error' => $e->getMessage()]);
        }
    }
}
