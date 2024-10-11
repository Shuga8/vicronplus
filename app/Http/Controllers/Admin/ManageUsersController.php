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
            'users' => User::paginate(getPagination())
        ];

        return view('admin.users.all')->with($data);
    }

    public function banned()
    {

        $data = [
            'title' => 'Banned Users',
            'users' => User::banned()->paginate(getPagination())
        ];

        return view('admin.users.banned')->with($data);
    }

    public function active()
    {
        $data = [
            'title' => 'Active Users',
            'users' => User::active()->paginate(getPagination())
        ];

        return view('admin.users.active')->with($data);
    }
}
