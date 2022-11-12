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

Route::controller(App\Http\Controllers\Api\VehicleBrandApiController::class)->group(function () {
    Route::get('/vehicles/brand', 'index');
    Route::get('/vehicles/brand/{brand}', 'show');
});

Route::controller(App\Http\Controllers\Api\VehicleApiController::class)->group(function () {
    Route::get('/vehicles', 'index')->name('vehicles');
    Route::get('/vehicles/{vehicle}', 'show')->name('vehicles.show');
    Route::post('/vehicles', 'store')->name('vehicles.store');
    Route::put('/vehicles/{vehicle}', 'update')->name('vehicles.update');
    Route::delete('/vehicles/{vehicle}', 'destroy')->name('vehicles.destroy');

});

Route::controller(App\Http\Controllers\Api\BrandApiController::class)->group(function () {
    Route::get('/brands', 'index')->name('brands.index');
    Route::get('/brands/{brand}', 'show')->name('brands.show');

    Route::delete('/brands/{brand}', 'destroy')->name('brands.destroy');
    Route::put('/brands/{brand}', 'update')->name('brands.update');
    
    Route::post('/brands', 'store')->name('brands.store');
});

Route::controller(App\Http\Controllers\Api\DriverApiController::class)->group(function () {
    Route::get('/drivers', 'index')->name('drivers.index');
});

Route::controller(App\Http\Controllers\Api\EnterpriseApiController::class)->group(function () {
    Route::get('/enterprises', 'index')->name('enterprises.index');
    Route::get('/enterprises/{enterprise}', 'show')->name('enterprises.show');
    Route::get('/enterprises/{enterprise}/drivers', 'showdrivers')->name('enterprises.showdrivers');
});


Route::controller(App\Http\Controllers\VehicleBrandController::class)->group(function () {
    Route::get('/vehicles/brand/{brand_id}', 'show');
});

Route::controller(App\Http\Controllers\Api\DriverToVehicleAssignListApiController::class)->group(function () {
    Route::get('/assignedlist', 'index');
});

Route::controller(App\Http\Controllers\Api\DriverToVehicleWorkingListApiController::class)->group(function () {
    Route::get('/working', 'index');
});

Route::controller(App\Http\Controllers\Api\DriverToEnterpriseApiController::class)->group(function () {
    Route::get('/enterprisesdrivers', 'index');
});

Route::controller(App\Http\Controllers\Api\VehicleToEnterpriseApiController::class)->group(function () {
    Route::get('/enterprisesvehicles', 'index');
});