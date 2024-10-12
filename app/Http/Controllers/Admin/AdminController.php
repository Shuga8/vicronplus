<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActiveInvestment;
use App\Models\Deposit;
use App\Models\User;
use App\Models\UserLogin;
use App\Models\Withdraw;
use Illuminate\Http\Request;

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
}
