<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'total_investment'];

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
