<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\VehicleResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vehicle;
use App\Models\Brand;

class VehicleBrandApiController extends Controller
{
    public function index()
    {
        $tmp = Vehicle::with('brands')->get();
        $vehicles = $tmp->each(function ($vehicle) {
            $vehicle->makeHidden(["image", "id"]);
        });
        return new VehicleResource($vehicles);
    }

    public function show(Brand $brand)
    {
        $vehicles = Vehicle::where('brand_id', $brand->id)->get();
        return new VehicleResource($vehicles);
    }
}
