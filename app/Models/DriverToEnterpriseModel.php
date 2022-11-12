<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Driver;
use App\Models\Enterprise;

class DriverToEnterpriseModel extends Model
{
    use HasFactory;

    protected $table = "driver_to_enterprise";

    protected $attributes = 
    [
        "enterprise_id",
        "driver_id",
        "drivers"
    ];


    protected $fillable =
    [
        "enterprise_id",
        "driver_id"
    ];
}
