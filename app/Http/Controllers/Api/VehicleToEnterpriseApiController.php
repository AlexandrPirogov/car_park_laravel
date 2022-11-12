<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleToEnterpriseModel;
use App\Http\Resources\VehicleToEnterpriseResource;

class VehicleToEnterpriseApiController extends Controller
{
    public function index()
    {
        return new VehicleToEnterpriseResource(VehicleToEnterpriseModel::all());  
    }
}
