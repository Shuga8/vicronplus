<?php

namespace App\Http\Controllers\Users;

use App\Models\ActiveInvestment;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InvestmentController extends Controller
{
    public function new()
    {
        $data = [
            'title' => 'New Investment',
            'plans' => Investment::all()
        ];
        return view('users.investment.new')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plan_id' => ['required', 'numeric'],
            'amount' => ['required', 'numeric']
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        $user = User::where('id', auth('web')->user()->id)->first();
        $balance = json_decode($user->balance, true);

        if ($balance['USD'] < $request->amount) {
            return back()->with(['error' => 'Insufficient balance']);
        }

        $plan = Investment::where('id', $request->plan_id)->first();
        $minimum = $plan->minimum;
        $maximum = $plan->maximum;

        if ($request->amount < $minimum) {
            return back()->with(['error' => "Amount does not reach the plan's minimum  amount requirements"]);
        }

        if ($request->amount > $maximum) {
            return back()->with(['error' => "Amount is more than plan's maximum amount requirement"]);
        }

        $balance['USD'] -= $request->amount;

        $user->balance = json_encode($balance);

        try {
            DB::beginTransaction();

            $active = new ActiveInvestment();
            $active->user_id = $user->id;
            $active->plan_id = $plan->id;
            $active->amount = $request->amount;
            $active->save();

            $transaction = new Transaction();

            $transaction->user_id = $user->id;
            $transaction->amount = $request->amount;
            $transaction->type = 0;

            $transaction->save();

            $user->save();

            DB::commit();

            return back()->with(['success' => "A $plan->duration {$plan->unit}s investment successull."]);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }

    public function log()
    {
        $data = [
            'title' => 'Investment Logs',
            'investments' => ActiveInvestment::where('user_id', auth()->user()->id)->with(['plan', 'user'])->paginate(getPagination())
        ];

        return view('users.investment.log')->with($data);
    }
}
