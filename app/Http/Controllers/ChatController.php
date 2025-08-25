<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(User $sender, User $receiver)
    {
        $chats = Chat::whereIn('sender_id', [$sender->id, $receiver->id])
            ->whereIn('receiver_id', [$sender->id, $receiver->id])
            ->orderBy('created_at')
            ->get();

        return view('chats.index', compact('chats', 'sender_id', 'receiver_id'));
    }

    public function store(Request $request, User $sender, User $receiver)
    {
        $message = $request->input('message');

        $chat = new Chat();
        $chat->sender_id = $sender->id;
        $chat->receiver_id = $receiver->id;
        $chat->message = $message;
        $chat->save();

        // Lakukan tindakan tambahan seperti notifikasi, dsb.

        return redirect()->back();
    }
}
