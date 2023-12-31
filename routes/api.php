<?php

use App\Http\Controllers\Api\V1\GameController;
use App\Http\Controllers\Api\V1\MapController;
use App\Http\Controllers\Api\V1\PlayerController;
use App\Http\Controllers\Api\V1\QuestionController;
use App\Http\Controllers\Api\V1\RespawnController;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//api/v1/players
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function(){
    Route::apiResource('players', PlayerController::class);
    Route::apiResource('games', GameController::class);
    Route::apiResource('maps', MapController::class);
    Route::apiResource('questions',QuestionController::class);
    Route::apiResource('respawns',RespawnController::class);

});