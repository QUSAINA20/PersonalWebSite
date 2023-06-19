<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        if ($clients->isEmpty()) {
            return response()->json(['message' => 'No client', 'clients' => []]);
        }
        $clients->each(function ($client) {
            $client->image_url = $client->getFirstMediaUrl('images');
            $client->makeHidden('media');
        });
        return response()->json(['clients' => $clients]);
    }
}
