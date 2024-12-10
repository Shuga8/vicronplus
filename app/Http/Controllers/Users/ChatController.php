<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //

    public function store(Request $request)
    {
        if (empty(trim($request->message)) && !$request->hasFile('file')) {
            return response()->json(['error' => 'no message!']);
        }
    }
}
