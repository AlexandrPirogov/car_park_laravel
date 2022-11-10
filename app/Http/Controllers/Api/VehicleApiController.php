<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\VehicleResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;


class VehicleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        $vehicles = $vehicles->each(function ($vehicle) {
            $vehicle->makeHidden([ "brands"]);
        });
        return new VehicleResource($vehicles);
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
        $params = $request->query();
        $path = public_path('storage/images/vehicles');
        if ( ! file_exists($path) ) mkdir($path, 0777, true);
        
        $file = $request->file('image');
        $fileName = '';
        if(!is_null($file))
        {
            $fileName = trim($file->getClientOriginalName());
            $file->move('storage/images/vehicles', $fileName);
        }
        $vehicle = Vehicle::create($params);
        $vehicles = Vehicle::all()->each(function ($vehicle) {
            $vehicle->makeHidden(["image", "id"]);
        });;
        return new VehicleResource($vehicle);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {

        return new VehicleResource($vehicle);
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
        $reqBody = $request->query();
        $reqBody['brand_id'] = $vehicle->id;
        $newVehicle = Vehicle::whereId($vehicle->id)->update($reqBody);
        return new VehicleResource($vehicle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //$vehicle->delete();
        return new VehicleResource($vehicle);
    }
}

