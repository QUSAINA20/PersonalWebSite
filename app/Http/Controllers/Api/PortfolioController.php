<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('created_at', 'desc')->get();
        if ($portfolios->isEmpty()) {
            return response()->json(['message' => 'No portfolios', 'portfolios' => []]);
        }
        $portfolios->each(function ($portfolio) {
            $portfolio->image_url = $portfolio->getFirstMedia('images')->getUrl();
            $portfolio->makeHidden('media');
        });

        return response()->json(['portfolios' => $portfolios]);
    }
}
