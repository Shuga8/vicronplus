<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ActiveInvestment;
use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\Withdraw;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->balance = json_decode($user->balance, true);

        $data = [
            'title' => 'Dashboard',
            'user' => $user,
            'totalInvestment' => ActiveInvestment::where('user_id', $user->id)->sum('amount'),
            'totalWithdrawn' => Withdraw::where('user_id', $user->id)->sum('amount'),
            'totalDeposit' => Deposit::where('user_id', $user->id)->sum('amount'),
            'withdrawals' => Withdraw::where('user_id', $user->id)->latest()->take(3)->get(),
            'deposits' => Deposit::where('user_id', $user->id)->latest()->take(3)->get(),
            'transactions' => Transaction::where('user_id', $user->id)->latest()->take(3)->get()
        ];

        return view('users.dashboard')->with($data);
    }
}
