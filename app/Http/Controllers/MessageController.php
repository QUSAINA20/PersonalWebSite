<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $query = Message::orderBy('created_at', 'desc');

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%');
            });
        }

        $messages = $query->paginate(10);

        return view('admin.message.index', compact('messages', 'search'));
    }

    public function show(Message $message)
    {
        return view('admin.message.show', compact('message'));
    }
}
