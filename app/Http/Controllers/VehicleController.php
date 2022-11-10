<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tmp = Vehicle::with('brands')->get();
        $vehicles = $tmp->each(function ($vehicle) {
            $vehicle->makeHidden(["image", "id"]);
        });
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

        $path = public_path('storage/images/vehicles');
        if ( ! file_exists($path) ) mkdir($path, 0777, true);
        
        $file = $request->file('image');
        $fileName = trim($file->getClientOriginalName());
        
        $params['image'] = $fileName;
        $file->move('storage/images/vehicles', $fileName);

        $pval = Brand::where('brand', $params['brand_id'])->get()->toArray()[0];
        $params['brand_id'] = $pval['id'];

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

        return \View::make("vehicle")->with(["mileage" => $vehicle->mileage,
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
        $reqBody = $request->post();
        $brand = json_decode($reqBody['brand']);
        unset($reqBody["_method"]);
        unset($reqBody["_token"]);
        unset($reqBody["brand"]);
        $reqBody['brand_id'] = $brand->id;
        Vehicle::whereId($vehicle->id)->update($reqBody);
        return redirect('/vehicles')->with('success', 'update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect('/vehicles')->with('success', 'deleted');
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
