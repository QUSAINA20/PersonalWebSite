<?php

use App\Http\Controllers\Api\AchievementController;
use App\Http\Controllers\Api\MessageController;

use App\Http\Controllers\Api\BiographyController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\PortfolioController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\SpecializationController;
use App\Http\Controllers\Api\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('portfolios', [PortfolioController::class, 'index']);
Route::get('videos', [VideoController::class, 'index']);
Route::get('experiences', [ExperienceController::class, 'index']);
Route::get('biographies', [BiographyController::class, 'index']);
Route::get('biographies', [SpecializationController::class, 'index']);
Route::post('send-message', [MessageController::class, 'store']);


Route::get('clients', [ClientController::class, 'index']);


Route::get('achievements', [AchievementController::class, 'index']);

