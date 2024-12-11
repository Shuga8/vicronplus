<?php

namespace App\Http\Controllers\Users;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;

class ChatController extends Controller
{

    public function index(Request $request, int $id)
    {
        if (auth()->user()->id !== $id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        return response()->json(Chat::where('from', $id)->orWhere('to', $id)->get());
    }

    public function store(Request $request)
    {
        if (empty(trim($request->message)) && !$request->hasFile('file')) {
            return response()->json(['error' => 'no message!']);
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
            $chat->from = auth()->user()->id;
            if (!empty(trim($request->message))) {
                $chat->message = $message;
            }
            if ($path !== null) {
                $chat->file = $path;
            }
            $chat->save();
            DB::commit();

            Notification::route('mail', 'lotocharles8@gmail.com')->notify(new NewMessage(User::where('id', auth()->user()->id)->first()));

            return response()->json(['success' => 'message sent']);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
