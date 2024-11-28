<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profit;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\ActiveInvestment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Referral;
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
        $user = User::where('id', $id)->with(['profit', 'referrer'])->first();

        if ($user && $user->referrer) {
            $user->referrer = User::where('id', $user->referrer->referrer)->first() ?? null;
        } else {
            $user->referrer = null;
        }


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

            // $transation = new Transaction();

            // $transation->user_id = $request->user_id;
            // $transation->amount = $request->amount;

            if ($request->type == "add") {
                $balance['USD'] += $request->amount;
                $message = "$$request->amount added to balance sucessfully";
                // $transation->type = 1;
            } else {
                $balance['USD'] -= $request->amount;
                if ($balance['USD'] < 0) {
                    $balance['USD'] = 0;
                }
                // $transation->type = 0;
                $message = "$$request->amount deducted from balance sucessfully";
            }


            $user->balance = json_encode($balance);
            $user->save();
            // $transation->save();
            DB::commit();
            return back()->with(['success' => $message]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['success' => $e->getMessage()]);
        }
    }

    public function updateProfit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'numeric'],
            'amount' => ['required', 'numeric']
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        try {
            DB::beginTransaction();
            if (Profit::where('user_id', $request->user_id)->exists()) {
                $profit = Profit::where('user_id', $request->user_id)->first();
                $profit->amount = $request->amount;

                $message = "Profit updated successfully";
            } else {
                $profit = new Profit();
                $profit->user_id = $request->user_id;
                $profit->amount = $request->amount;

                $message = "Profit created successfully";
            }

            $profit->save();
            DB::commit();
            return back()->with(['success' => $message]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
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

    public function investments($type = 'all')
    {
        if ($type !== "all") {
            if ($type == 1) {
                $title = 'All Completed Investments';
            } else if ($type == 0) {
                $title = 'All Running Investments';
            }

            // Searching for investments based on status and user fields
            $investments = ActiveInvestment::where('active_investments.status', $type) // Specify the table name
                ->with(['user', 'plan'])
                ->join('users', 'active_investments.user_id', '=', 'users.id') // Join with users table
                ->searchable(['users.username', 'users.email']) // Adjusted to search through user relation
                ->select('active_investments.*') // Select only the columns from active_investments
                ->paginate(getPagination());
        } else {
            // Searching for all active investments
            $investments = ActiveInvestment::join('users', 'active_investments.user_id', '=', 'users.id') // Join with users table
                ->searchable(['users.username', 'users.email']) // Adjusted to search through user relation
                ->with(['user', 'plan'])
                ->select('active_investments.*') // Select only the columns from active_investments
                ->paginate(getPagination());

            $title = 'All Active Investments';
        }

        $data = [
            'title' => $title,
            'investments' => $investments
        ];

        return view('admin.users.investments')->with($data);
    }

    public function updateInvestment($investment_id, $user_id)
    {
        $investment = ActiveInvestment::where('id', $investment_id)->with(['plan', 'user'])->first();
        $user = User::where('id', $user_id)->first();

        if ($investment->status == 1) {

            return back()->with(['error' => 'Investment already completed']);
        }

        try {
            DB::beginTransaction();

            $percentage = $investment->plan->percentage;
            $amount = $investment->amount;

            $amount += ($percentage / 100) * $amount;

            $balance = json_decode($user->balance, true);

            $balance['USD'] += $amount;

            $user->balance = json_encode($balance);

            $investment->status = 1;

            $transaction = new Transaction();

            $transaction->user_id = $user->id;
            $transaction->type = 1;
            $transaction->amount = $amount;

            $transaction->save();
            $investment->save();
            $user->save();

            DB::commit();

            return back()->with(['success' => 'Investment Completed Successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deposits($type = 'all')
    {
        if ($type == 'all') {
            $deposits = Deposit::join('users', 'deposits.user_id', '=', 'users.id')->searchable(['users.username', 'users.email'])->with(['user'])->select('deposits.*')->paginate(getPagination());
        } else {

            $deposits = Deposit::where('deposits.status', $type)->join('users', 'deposits.user_id', '=', 'users.id')->searchable(['users.username', 'users.email'])->with(['user'])->select('deposits.*')->paginate(getPagination());
        }

        $title = ucfirst("$type Deposits");

        $data = [
            'title' => $title,
            'deposits' => $deposits
        ];

        return view('admin.users.deposits')->with($data);
    }

    public function updateDeposit($status, $id)
    {
        $deposit = Deposit::where('id', $id)->with(['user'])->first();

        if ($deposit->status == $status) {
            return back()->with(['error' => 'Invalid action!']);
        }

        $amount = $deposit->amount;
        $user = User::where('id', $deposit->user_id)->first();
        $balance = json_decode($user->balance, true);

        if ($status == 'approved') {
            $balance['USD'] += abs($amount);
        }

        try {
            DB::beginTransaction();

            $user->balance = json_encode($balance);
            $deposit->status = $status;

            if ($status == "approved") {

                $transaction = new Transaction();

                $transaction->user_id = $user->id;
                $transaction->type = 1;
                $transaction->amount = $amount;

                $transaction->save();

                if (Deposit::where('user_id', $deposit->user->id)->count() === 1 && Referral::where('user_id', $user->id)->exists()) {
                    $ref = Referral::where('user_id', $user->id)->first();
                    $refUser = User::where('id', $ref->referrer)->first();
                    $refBal = json_decode($refUser->balance, true);
                    $fivePercent = 0.05 * $amount;
                    $refBal['USD'] += abs($fivePercent);
                    $refUser->balance = json_encode($refBal);
                    $refUser->save();
                }
            }
            $user->save();

            $deposit->save();

            DB::commit();

            return back()->with(['success' => "Deposit " . ucfirst($deposit->status) . " successfully"]);
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function withdrawals($type = "all")
    {
        if ($type == 'all') {
            $withdrawals = Withdraw::join('users', 'withdraws.user_id', '=', 'users.id')->searchable(['users.username', 'users.email'])->with(['user'])->select('withdraws.*')->paginate(getPagination());
        } else {

            $withdrawals = Withdraw::where('withdraws.status', $type)->join('users', 'withdraws.user_id', '=', 'users.id')->searchable(['users.username', 'users.email'])->with(['user'])->select('withdraws.*')->paginate(getPagination());
        }

        $title = ucfirst("$type Withdrawals");

        $data = [
            'title' => $title,
            'withdraws' => $withdrawals
        ];

        return view('admin.users.withrawals')->with($data);
    }

    public function updateWithdrawals($status, $id)
    {
        $withdrawal = Withdraw::where('id', $id)->with(['user'])->first();

        if ($withdrawal->status == $status) {
            return back()->with(['error' => 'Invalid Action']);
        }

        $amount = $withdrawal->amount;
        $user = User::where('id', $withdrawal->user_id)->first();
        $balance = json_decode($user->balance, true);

        if ($status == 'rejected') {
            $balance['USD'] += abs($amount);
        }

        try {
            DB::beginTransaction();

            $user->balance = json_encode($balance);
            $withdrawal->status = $status;

            if ($status == "rejected") {

                $transaction = new Transaction();

                $transaction->user_id = $user->id;
                $transaction->type = 1;
                $transaction->amount = $amount;

                $transaction->save();
            }

            $user->save();

            $withdrawal->save();

            DB::commit();

            return back()->with(['success' => "Withdrawal " . ucfirst($withdrawal->status) . " successfully"]);
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function editInvestment(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'investment_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric'],
            'amount' => ['required', 'numeric']
        ]);

        if ($validate->fails()) {
            return back()->with(['error' => $validate->errors()->first()]);
        }

        $investment = ActiveInvestment::where('id', $request->investment_id)->with(['plan', 'user'])->first();

        try {
            DB::beginTransaction();
            $investment->amount = $request->amount;
            $investment->save();
            DB::commit();
            return back()->with(['success' => "Amount edited successfully"]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
