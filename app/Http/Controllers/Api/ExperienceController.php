<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Http\Resources\ExperienceResource;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('created_at', 'desc')->get();
        if ($experiences->isEmpty()) {
            return response()->json(['message' => 'No Experiences', 'experiences' => []]);
        }
       $result = ExperienceResource::collection($experiences);
       return response()->json(['message' => 'Experiences retrieved successfully', 'experiences' =>  $result]);
    }
}

