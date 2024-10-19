<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ActiveInvestment;
use App\Models\Deposit;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ManageUsersController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'All Users',
            'users' => User::searchable(['username', 'email'])->latest()->paginate(getPagination())
        ];

        return view('admin.users.all')->with($data);
    }

    public function banned()
    {

        $data = [
            'title' => 'Banned Users',
            'users' => User::banned()->searchable(['username', 'email'])->latest()->paginate(getPagination())
        ];

        return view('admin.users.banned')->with($data);
    }

    public function active(Request $request)
    {
        $data = [
            'title' => 'Active Users',
            'users' => User::active()->searchable(['username', 'email'])->latest()->paginate(getPagination())
        ];

        return view('admin.users.active')->with($data);
    }

    public function details(int $id)
    {
        $user = User::where('id', $id)->first();

        $data = [
            'title' => 'User Details',
            'user' => $user,
            'totalWithdraws' => Withdraw::where('user_id', $id)->count(),
            'totalDeposits' => Deposit::where('user_id', $id)->count(),
            'totalInvestments' => ActiveInvestment::where('user_id', $id)->count(),
            'totalTransactions' => Transaction::where('user_id', $id)->count()
        ];

        return view('admin.users.details')->with($data);
    }

    public function addSubBalance(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric'],
            'amount' => ['required', 'numeric'],
            'type' => ['required', 'string', 'in:add,sub']
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        try {

            DB::beginTransaction();
            $user = User::where('id', $request->user_id)->first();

            $balance = json_decode($user->balance, true);

            $transation = new Transaction();

            $transation->user_id = $request->user_id;
            $transation->amount = $request->amount;

            if ($request->type == "add") {
                $balance['USD'] += $request->amount;
                $message = "$$request->amount added to balance sucessfully";
                $transation->type = 1;
            } else {
                $balance['USD'] -= $request->amount;
                if ($balance['USD'] < 0) {
                    $balance['USD'] = 0;
                }
                $transation->type = 0;
                $message = "$$request->amount deducted from balance sucessfully";
            }


            $user->balance = json_encode($balance);
            $user->save();
            $transation->save();
            DB::commit();
            return back()->with(['success' => $message]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['success' => $e->getMessage()]);
        }
    }

    public function loginAsUser(int $id)
    {
        Auth::loginUsingId($id);
        return redirect(route('user.dashboard'))->with(['success' => 'login successfull']);
    }

    public function banUnbanUser(int $type,  int $id)
    {

        try {
            DB::beginTransaction();

            $user = User::where('id', $id)->first();

            $user->status = $type;

            // dd($user->status == false);

            $user->save();

            if ($user->status == false) {
                $message = "User banned successfully";
            } else if ($user->status == true) {
                $message = "User unbanned successfully";
            }

            DB::commit();

            return back()->with(['success' => $message]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
