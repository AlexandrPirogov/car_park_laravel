<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehicle;
use App\Models\Brand;

class VehicleBrandController extends Controller
{
    public function index()
    {
        $tmp = Vehicle::with('brands')->get();
        $vehicles = $tmp->each(function ($vehicle) {
            $vehicle->makeHidden(["image", "id"]);
        });
        return \View::make("vehicles")->with(["vehicles" => $vehicles]);
    }

    public function show(Request $request)
    {
        $brand_id = $request->route('brand_id');
        $vehicles = Vehicle::where('brand_id', $brand_id)->get();
        $brand_name = Brand::select('brand')->where('id', $brand_id)->get()->toArray();
        return \View::make("vehiclesbrand")->with(["vehicles" => $vehicles,
                                                    "brand" => $brand_name[0]['brand']]);
    }
}
