<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Wallets',
            'wallets' => Wallet::paginate(getPagination())
        ];

        return view('admin.wallets.index')->with($data);
    }

    public function store(Request $request, int $id = 0)
    {

        $validator = Validator::make($request->all(), [
            'network' => ['required', 'string'],
            'address' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }


        if ($id == 0) {

            if ($request->hasFile('logo')) {
                $path = Storage::putFile('network', $request->file('logo'));
            }

            try {
                DB::beginTransaction();

                $wallet = new Wallet();
                $wallet->network = $request->network;
                $wallet->address = $request->address;
                $wallet->logo = $path ?? NULL;

                $wallet->save();

                DB::commit();

                return redirect(route('admin.wallet.all'))->with(['success' => ucwords($request->network) . " address added successfully"]);
            } catch (\Exception $e) {
                DB::rollBack();
                if ($path) {
                    Storage::delete($path);
                }
                return redirect(route('admin.wallet.all'))->with(['error' => $e->getMessage()]);
            }
        } else {

            $wallet = Wallet::findOrFail($id);

            if ($request->hasFile('logo')) {
                if (!is_null($wallet->logo)) {
                    $path = $wallet->logo;
                    Storage::delete($path);
                }
                $path = Storage::putFile('network', $request->file('logo'));
            }

            try {
                DB::beginTransaction();

                $wallet->network = $request->network;
                $wallet->address = $request->address;
                $wallet->logo = $path ?? NULL;

                DB::commit();

                return redirect(route('admin.wallet.all'))->with(['success' => ucwords($request->network) . " address updated successfully"]);
            } catch (\Exception $e) {
                DB::rollBack();
                if ($path) {
                    Storage::delete($path);
                }
                return redirect(route('admin.wallet.all'))->with(['error' => $e->getMessage()]);
            }
        }
    }

    public function delete(int $id)
    {
        $wallet = Wallet::findOrFail($id);
        $name = $wallet->network;

        try {
            DB::beginTransaction();
            $wallet->delete();
            DB::commit();

            return redirect(route('admin.wallet.all'))->with(['success' => ucwords($name) . " network deleted successfully"]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect(route('admin.wallet.all'))->with(['error' => $e->getMessage()]);
        }
    }
}
