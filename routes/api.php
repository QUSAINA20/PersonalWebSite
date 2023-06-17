<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SpecializationController;

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
Route::get('/specials',[SpecializationController::class,'index']);
Route::get('/special/{id}',[SpecializationController::class,'show']);
Route::post('/specials',[SpecializationController::class,'store']);
Route::post('/special/{id}',[SpecializationController::class,'update']);
Route::post('/special_d/{id}',[SpecializationController::class,'destory']);
