<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enterprise;

class Driver extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function enterprises()
    {
        $this->belongsTo(Enterprise::class);
    }
}
