<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverToVehicleAssignList;
use App\Http\Resources\DriverToVehicleAssignListResource;

class DriverToVehicleAssignListApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DriverToVehicleAssignListResource(DriverToVehicleAssignList::all());  
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DriverToVehicleAssignList  $driverToVehicleAssignList
     * @return \Illuminate\Http\Response
     */
    public function show(DriverToVehicleAssignList $driverToVehicleAssignList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DriverToVehicleAssignList  $driverToVehicleAssignList
     * @return \Illuminate\Http\Response
     */
    public function edit(DriverToVehicleAssignList $driverToVehicleAssignList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DriverToVehicleAssignList  $driverToVehicleAssignList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DriverToVehicleAssignList $driverToVehicleAssignList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DriverToVehicleAssignList  $driverToVehicleAssignList
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriverToVehicleAssignList $driverToVehicleAssignList)
    {
        //
    }
}
