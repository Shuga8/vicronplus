<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

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
}
