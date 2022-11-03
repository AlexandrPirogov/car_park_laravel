<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Brand;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all()->each(function ($vehicle) {
            $vehicle->makeHidden(["image", "id"]);
        });;

        return \View::make("vehicles")->with(["vehicles" => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->post();
        $pval = Brand::where('brand', $params['brand_id'])->get()->toArray()[0];
        $params['brand_id'] = $pval['id'];
        $params['image'] = '';
        $vehicle = Vehicle::create($params);
        $vehicles = Vehicle::all()->each(function ($vehicle) {
            $vehicle->makeHidden(["image", "id"]);
        });;

        return \View::make("vehicles")->with(["vehicles" => $vehicles]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return \View::make("vehicles")->with(["mileage" => $vehicle->mileage,
                                              "short_number" => $vehicle->short_number,
                                              "image" => $vehicle->image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }

    public function img(Vehicle $vehicle)
    {
        header("Content-Type: image/png");
        return ase64_encode(pg_unescape_bytea(stream_get_contents($vehicle->image)));
        return \View::make("vehicle", )->with(["mileage" => $vehicle->mileage,
        "short_number" => $vehicle->short_number,
        "image" => $vehicle->image]);;
    }
}
