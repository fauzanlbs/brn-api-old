<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PingController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\ProfileController;
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

// Ping
Route::get('ping', [PingController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::prefix('point')->group(function () {
        Route::get('/missions', [PointController::class, 'missions']);
        Route::get('/histories', [PointController::class, 'histories']);
    });
});
