<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ActiveInvestment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'totalWithdrawn' => Withdraw::where('user_id', $user->id)->approved()->sum('amount'),
            'totalDeposit' => Deposit::where('user_id', $user->id)->approved()->sum('amount'),
            'withdrawals' => Withdraw::where('user_id', $user->id)->latest()->take(3)->get(),
            'deposits' => Deposit::where('user_id', $user->id)->latest()->take(3)->get(),
            'transactions' => Transaction::where('user_id', $user->id)->latest()->take(3)->get()
        ];

        return view('users.dashboard')->with($data);
    }

    public function transactions()
    {
        $data = [
            'title' => 'Transactions History',
            'transactions' => Transaction::where('user_id', auth()->user()->id)->paginate(getPagination()),
        ];

        return view('users.transactions-log')->with($data);
    }

    public function settings()
    {
        $data = [
            'title' => 'Settings'
        ];

        return view('users.settings')->with($data);
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'confirmed']
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        $user = User::where('id', auth()->user()->id)->first();

        try {
            DB::beginTransaction();
            $user->password =  Hash::make($request->password);
            $user->save();

            DB::commit();
            return back()->with(['success' => "Password Change Successfully"]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
