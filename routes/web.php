<?php

use Illuminate\Support\Facades\Route;
use App\Models\Brand;
use App\Models\Vehicle;

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
    Route::get('/vehicles', 'index')->name('vehicles');
    Route::post('/vehicles', 'store')->name('vehicles.store');;
    Route::delete('/vehicles/{vehicle}', 'destroy')->name('vehicles.destroy');
    Route::put('/vehicles/{vehicle}', 'update')->name('vehicles.update');
    Route::get('/vehicles/{vehicle}', 'show')->name('vehicles.show');;

    Route::get('/vehicle/edit/{vehicle}', function(Vehicle $vehicle){

        $brands = Brand::select(['brand','id'])->get();
        return \View::make('editvehicle')->with(['vehicle' => $vehicle,
                                                'brands' => $brands]);
    });
    Route::get('/vehicle/create', function()
    {
        return \View::make('createvehicle');
    })->name('vehicles.create');;
});

Route::controller(App\Http\Controllers\BrandController::class)->group(function () {
    Route::get('/brands', 'index')->name('brands.index');
    Route::get('/brands/{brand}', 'show')->name('brands.show');
    Route::get('/brands/edit/{brand}', function(Brand $brand){return \View::make('editbrand')->with(['brand' => $brand]);});
    Route::get('/brand/create', function() { return \View::make('createbrand');})->name('brands.create');

    Route::delete('/brands/{brand}', 'destroy')->name('brands.destroy');
    Route::put('/brands/{brand}', 'update')->name('brands.update');
    
    Route::post('/brands', 'store')->name('brands.store');
});


Route::controller(App\Http\Controllers\VehicleBrandController::class)->group(function () {
    Route::get('/vehicles/brand/{brand_id}', 'show');
});