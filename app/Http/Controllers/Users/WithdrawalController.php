<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use App\Models\Withdraw;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class WithdrawalController extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'New Withrawal'
        ];

        return view('users.withdraw.index')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric'],
            'wallet' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        $user = User::where('id', auth()->user()->id)->first();

        $balance = json_decode($user->balance, true);

        if ($balance['USD'] < $request->amount) {
            return back()->with(['error' => "Insufficient balance"]);
        } else {
            $balance['USD'] -= $request->amount;
        }

        $user->balance = json_encode($balance);

        try {
            Db::beginTransaction();

            $withdraw = new Withdraw();
            $withdraw->user_id = $user->id;
            $withdraw->amount = $request->amount;
            $withdraw->wallet = $request->wallet;

            $transaction = new Transaction();

            $transaction->user_id = $user->id;
            $transaction->amount = $request->amount;
            $transaction->type = 0;

            $transaction->save();

            $withdraw->save();
            $user->save();

            DB::commit();

            return back()->with(['success' => 'Your withdrawal is being processed']);
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function log()
    {

        $data = [
            'title' => 'Withdrawal Logs',
            'withdraws' => Withdraw::where('user_id', auth()->user()->id)->paginate(getPagination())
        ];

        return view('users.withdraw.log')->with($data);
    }
}
