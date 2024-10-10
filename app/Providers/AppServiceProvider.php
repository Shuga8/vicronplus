<?php

namespace App\Providers;

use App\Models\ActiveInvestment;
use App\Models\Deposit;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('partials._admin-sidebar', function ($view) {
            $view->with([
                'activeUsersCount' => User::active()->count(),
                'bannedUsersCount' => User::banned()->count(),
                'allUsersCount' => User::count(),
                'pendingDepositsCount' => Deposit::pending()->count(),
                'approvedDepositsCount' => Deposit::approved()->count(),
                'rejectedDepositsCount' => Deposit::rejected()->count(),
                'allDepositsCount' => Deposit::count(),
                'pendingWithdrawalsCount' => Withdraw::pending()->count(),
                'approvedWithdrawalsCount' => Withdraw::approved()->count(),
                'rejectedWithdrawalsCount' => Withdraw::rejected()->count(),
                'allWIthdrawalsCount' => Withdraw::count(),
                'runningInvestmentsCount' => ActiveInvestment::running()->count(),
                'completedInvestmentsCount' => ActiveInvestment::completed()->count(),
                'allInvestmentsCount' => ActiveInvestment::count()
            ]);
        });
    }
}
