<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index($id)
    {
        $data = [
            'title' => 'Chat',
            'chats' => Chat::where('from', $id)->orWhere('to', $id)->get(),
            'user' => User::where('id', $id)->first()
        ];

        return view('admin.users.chat')->with($data);
    }

    public function store(Request $request) {}
}
