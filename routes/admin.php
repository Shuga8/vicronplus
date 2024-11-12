<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->controller('AuthController')->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('admin.guest');
    Route::post('/auth', 'auth')->name('auth')->middleware('admin.guest');
    Route::get('/logout', 'logout')->name('logout')->middleware('admin');
});

Route::middleware('admin')->group(function () {
    Route::controller('AdminController')->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
        Route::get('settings', 'settings')->name('settings');
        Route::post('change-password', 'changePassword')->name('changePassword');
    });

    Route::name('users.')->controller('ManageUsersController')->group(function () {

        Route::prefix('users')->group(function () {
            Route::get('/', 'index')->name('all');
            Route::get('/banned', 'banned')->name('banned');
            Route::get('/active', 'active')->name('active');
            Route::get('/details/{id}', 'details')->name('details');
            Route::get('login/{id}', 'loginAsUser')->name('loginAsUser');
            Route::get('changeStatus/{type}/{id}', 'banUnbanUser')->name('banUnbanUser');
            Route::post('add-sub-balance', 'addSubBalance')->name('addSubBalance');
            Route::post('update-profit', 'updateProfit')->name('updateProfit');
        });

        Route::prefix('investments')->group(function () {
            Route::get('/type/{type}', 'investments')->name('investments');
            Route::get('/update-investment/{investment_id}/{user_id}', 'updateInvestment')->name('investments.update');
            Route::post('/update-edit', 'editInvestment')->name('investment.edit');
        });

        Route::prefix('deposits')->group(function () {
            Route::get('/type/{type}', 'deposits')->name('deposits');
            Route::get('/update-deposit/{status}/{id}', 'updateDeposit')->name('deposit.update');
        });

        Route::prefix('withdrawals')->group(function () {
            Route::get('/type/{type}', 'withdrawals')->name('withdrawals');
            Route::get('/update-withdrawal/{status}/{id}', 'updateWithdrawals')->name('withdraw.update');
        });
    });

    Route::prefix("investment-plans")->name('investment.')->controller('InvestmentController')->group(function () {
        Route::get("/", 'index')->name("all");
        Route::post("/store/{id}", 'store')->name("store");
        Route::get("/delete/{id}", 'delete')->name("delete");
    });

    Route::prefix('wallets')->name('wallet.')->controller('WalletController')->group(function () {
        Route::get('/', 'index')->name('all');
        Route::post("/store/{id}", 'store')->name("store");
        Route::get("/delete/{id}", 'delete')->name("delete");
    });
});
