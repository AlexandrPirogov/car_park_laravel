<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Enterprise;
use App\Models\DriverToEnterpriseModel;
use App\Http\Resources\DriverToEnterpriseResource;

class DriverToEnterpriseApiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new DriverToEnterpriseResource(DriverToEnterpriseModel::all());  
    }

}
