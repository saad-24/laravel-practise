<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDocuments extends Model
{
    use HasFactory;

    protected $fillable = ['name','path'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

}
