<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        if (empty(trim($request->message)) && !$request->hasFile('file')) {
            return back()->with(['error' => 'no message!']);
        }
        if (!empty(trim($request->message))) {
            $message = nl2br(htmlspecialchars(trim($request->message)));
        }
        $path = null;
        if ($request->hasFile('file')) {
            $path = Storage::putFile('chat', $request->file('file'));
        }

        try {
            DB::beginTransaction();
            $chat = new Chat();
            $chat->to = $request->user_id;
            if (!empty(trim($request->message))) {
                $chat->message = $message;
            }
            if ($path !== null) {
                $chat->file = $path;
            }
            $chat->save();
            DB::commit();

            return back()->with(['success' => ' message sent!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
