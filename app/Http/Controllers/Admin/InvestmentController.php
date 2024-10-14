<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Investment Plans',
            'plans' => Investment::all()
        ];

        return view('admin.plans.index')->with($data);
    }
}
