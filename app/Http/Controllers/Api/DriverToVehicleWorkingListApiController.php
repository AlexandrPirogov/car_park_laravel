<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriverToVehicleWorkingList;
use App\Http\Resources\DriverToVehicleWorkingListResource;

class DriverToVehicleWorkingListApiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DriverToVehicleWorkingListResource(DriverToVehicleWorkingList::all());
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
     * @param  \App\Models\DriverToVehicleWorkingList  $driverToVehicleWorkingList
     * @return \Illuminate\Http\Response
     */
    public function show(DriverToVehicleWorkingList $driverToVehicleWorkingList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DriverToVehicleWorkingList  $driverToVehicleWorkingList
     * @return \Illuminate\Http\Response
     */
    public function edit(DriverToVehicleWorkingList $driverToVehicleWorkingList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DriverToVehicleWorkingList  $driverToVehicleWorkingList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DriverToVehicleWorkingList $driverToVehicleWorkingList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DriverToVehicleWorkingList  $driverToVehicleWorkingList
     * @return \Illuminate\Http\Response
     */
    public function destroy(DriverToVehicleWorkingList $driverToVehicleWorkingList)
    {
        //
    }
}
