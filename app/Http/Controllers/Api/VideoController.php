<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $video = Video::orderBy('created_at', 'desc')->get();
        if ($video->isEmpty()) {
            return response()->json(['message' => 'No video', 'video' => []]);
        }

        return response()->json(['video' => $video]);
    }
}
