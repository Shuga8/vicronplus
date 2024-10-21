<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Deposit;
use App\Models\Withdraw;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use App\Models\ActiveInvestment;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $totalUsers = User::count();
        $totalActiveUsers = User::active()->count();
        $totalBannedUsers = User::banned()->count();
        $runningInvestments = ActiveInvestment::running()->count();
        $completedInvestments = ActiveInvestment::completed()->count();
        $allInvestments = ActiveInvestment::count();
        $allDeposits = Deposit::count();
        $allWithdrawals = Withdraw::count();
        $logins = UserLogin::with('user')->latest()->paginate(getPagination());


        $data = [
            'title' => 'Dashboard',
            'totalUsers' => $totalUsers,
            'totalActiveUsers' => $totalActiveUsers,
            'totalBannedUsers' => $totalBannedUsers,
            'runningInvestments' => $runningInvestments,
            'completedInvestments' => $completedInvestments,
            'allInvestments' => $allInvestments,
            'allDeposits' => $allDeposits,
            'allWithdrawals' => $allWithdrawals,
            'logins' => $logins
        ];

        return view('admin.dashboard')->with($data);
    }

    public function settings()
    {
        $data = [
            'title' => 'Settings'
        ];

        return view('admin.settings')->with($data);
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'confirmed']
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => $validator->errors()->first()]);
        }

        $user = Admin::where('id', auth('admin')->user()->id)->first();

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
