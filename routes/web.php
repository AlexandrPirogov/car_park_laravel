<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(App\Http\Controllers\VehicleController::class)->group(function () {
    Route::get('/vehicles', 'index');
    Route::get('/vehicles/{vehicle}', 'show');

    Route::get('/vehicle/create', function()
    {
        return \View::make('createvehicle');
    });
    Route::post('/vehicles', 'store');
});

Route::controller(App\Http\Controllers\BrandController::class)->group(function () {
    Route::get('/brands', 'index');
    Route::get('/brands/{brand}', 'show');
    

    Route::get('/brand/create', function()
    {
        return \View::make('createbrand');
    });
    Route::post('/brands', 'store');
});


Route::controller(App\Http\Controllers\VehicleBrandController::class)->group(function () {
    Route::get('/vehicles/brand/{brand_id}', 'show');
});