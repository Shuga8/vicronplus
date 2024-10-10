<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        $data = [
            'title' => 'Login'
        ];

        return view('admin.auth.login')->with($data);
    }

    public function auth(Request $request)
    {
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        $remember = $request->remember;

        if (Auth::guard('admin')->attempt($fields, $remember)) {
            $request->session()->regenerate();

            return redirect(route('admin.dashboard'))->with(['success' => 'login successfull']);
        } else {
            return to_route('admin.login')->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->forget('admin');
        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('message', "You have been logged out");
    }
}
