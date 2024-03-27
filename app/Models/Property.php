<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'total_investment',
        'bed',
        'bath',
        'area',
        'category',
        'status',
        'address_address',
        'address_latitude',
        'address_longitude',
        'annualised_return',
        'annual_appreciation',
        'projected_gross_yield',
        'projected_net_yield',
        'property_overview',
    ];

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function amenities()
    {
        return $this->hasMany(PropertyAmenities::class);
    }
    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    public function ownerships()
    {
        return $this->hasMany(Ownership::class);
    }
}
