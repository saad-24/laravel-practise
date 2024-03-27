<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenities extends Model
{
    use HasFactory;

    protected $fillable = ['amenities'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
