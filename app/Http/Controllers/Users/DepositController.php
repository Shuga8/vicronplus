<?php

namespace App\Http\Controllers\Users;

use App\Models\Deposit;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DepositController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'New Deposit',
            'wallets' => Wallet::paginate(getPagination())
        ];

        return view('users.deposit.index')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        if ($request->hasFile('proof') == false) {
            return back()->with(['error' => 'Upload proof (reciept) of deposit']);
        }

        $path = null;

        if ($request->hasFile('proof')) {
            $path = Storage::putFile('proof', $request->file('proof'));
        }


        try {
            DB::beginTransaction();

            $deposit = new Deposit();

            $deposit->user_id = auth()->user()->id;
            $deposit->amount = $request->amount;
            $deposit->proof = $path;

            $deposit->save();
            DB::commit();
            return back()->with(['success' => 'Your deposit request will be confirmed shortly']);
        } catch (\Exception $e) {
            DB::rollBack();
            if ($path !== null) {
                Storage::delete($path);
            }
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
