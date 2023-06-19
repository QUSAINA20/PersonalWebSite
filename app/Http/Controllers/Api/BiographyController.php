<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Biography;
use App\Models\Portfolio;

class BiographyController extends Controller
{
    public function index()
    {
        // return only the last added bio
        $biography = Biography::query()->orderBy('created_at', 'desc')->first();
        if (!$biography) {
            return response()->json([
                'message' => 'No biographies.',
                'biography' => $biography
            ]);
        }
        $biography->image_url = $biography->getFirstMedia('images')->getUrl();
        $biography->makeHidden('media');
        return response()->json([
            'message' => 'Biography retrieved successfully.',
            'biography' => $biography
        ]);
    }
}
