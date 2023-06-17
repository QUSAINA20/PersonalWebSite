<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Biography;
use App\Models\Portfolio;

class BiographyController extends Controller
{
    public function index()
    {
        $biographies = Biography::query()->orderBy('created_at', 'desc')->get();
        if ($biographies->isEmpty()) {
            return response()->json([
                'message' => 'No biographies.',
                'biographies' => $biographies
            ]);
        }

        return response()->json([
            'message' => 'Biographies retrieved successfully.',
            'biographies' => $biographies
        ]);
    }
}
