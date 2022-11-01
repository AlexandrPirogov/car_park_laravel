<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Models\Vehicle;

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

Route::controller(App\Http\Controllers\VehicleController::class)->group(function () {
    Route::get('/vehicles', 'index');
    Route::get('/vehicles/{vehicle}', 'show');
    Route::get('/vehicles/{vehicle}', 'img');
});

