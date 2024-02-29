<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['property_id', 'quantity'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
