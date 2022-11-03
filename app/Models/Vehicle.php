<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Vehicle extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $appends = ['brands'];

    protected $fillable = [
        "brand_id",
        "mileage",
        "short_number",
        "delivery_date",
        "image"
    ];

    public function brands()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function getBrandsAttribute()
    {
        return "SDF";
    }

}
