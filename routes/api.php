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
});

Route::controller(App\Http\Controllers\BrandController::class)->group(function () {
    Route::get('/brands', 'index');
    Route::get('/brands/{brand}', 'show');
    Route::get('/brand/create', function()
    {
        return \View::make('createbrand');
    });
    Route::post('/brand', 'store');
});


