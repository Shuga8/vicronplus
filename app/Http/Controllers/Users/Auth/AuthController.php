<?php

namespace App\Http\Controllers\Users\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $username;

    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
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

    public function loginUser(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string']
        ]);

        $remember = $request->remember;

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            $request->session()->regenerate();

            return to_route('home')->with(['success' => 'log in successfull']);
        } else {
            return to_route('user.login')->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {

        auth('web')->logout();

        $request->session()->forget('web'); // Remove user-related session data
        $request->session()->regenerateToken();

        return redirect()->intended(route('user.login'))->with(['success' => "You have been logged out"]);
    }
}
