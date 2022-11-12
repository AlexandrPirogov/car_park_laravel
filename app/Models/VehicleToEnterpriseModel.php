<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleToEnterpriseModel extends Model
{
    use HasFactory;

    protected $table = "vehicle_to_enterprise";

    protected $attributes = 
    [
        "enterprise_id",
        "vehicle_id",
        "vehicles"
    ];


    protected $fillable =
    [
        "enterprise_id",
        "vehicle_id"
    ];

}
