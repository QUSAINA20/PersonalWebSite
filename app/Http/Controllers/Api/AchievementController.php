<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('created_at', 'desc')->get();
        if ($achievements->isEmpty()) {
            return response()->json(['message' => 'No Achievement', 'achievement' => []]);
        }

        return response()->json([
            'Achievements' =>  $achievements
        ]);
    }
}
