<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Specialization;

class SpecializationController extends Controller
{
    public function index()
    {
        $specializations = Specialization::orderBy('created_at', 'desc')->get();
        if ($specializations->isEmpty()) {
            return response()->json([
                'message' => 'No Specializations',
                'specializations' => $specializations
            ]);
        }

        return response()->json([
            'message' => 'Specializations retrieved successfully',
            'specializations' =>  $specializations
        ]);
    }
}
