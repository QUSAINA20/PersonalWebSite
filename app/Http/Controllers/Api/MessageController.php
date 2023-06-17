<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'content' => 'required|string',
        ]);
        $message = Message::create($validator);
        return response()->json('Message Sent successfully.');
    }
}
