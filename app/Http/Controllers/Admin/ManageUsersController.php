<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageUsersController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'All Users',
            'users' => User::searchable(['username', 'email'])->paginate(getPagination())
        ];

        return view('admin.users.all')->with($data);
    }

    public function banned()
    {

        $data = [
            'title' => 'Banned Users',
            'users' => User::banned()->searchable(['username', 'email'])->paginate(getPagination())
        ];

        return view('admin.users.banned')->with($data);
    }

    public function active(Request $request)
    {
        $data = [
            'title' => 'Active Users',
            'users' => User::active()->searchable(['username', 'email'])->paginate(getPagination())
        ];

        return view('admin.users.active')->with($data);
    }
}
