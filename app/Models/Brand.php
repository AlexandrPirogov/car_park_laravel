<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Vehicle;

class Brand extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "brand",
        "type",
        "version",
        "seats",
        "enginge_power",
        "release_date",
        "logo"
    ];

    public function vehicles()
    {
        return $this->belongsTo(vehicles::class);
    }
}
