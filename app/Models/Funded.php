<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funded extends Model
{
    use HasFactory;
    protected $table = 'Funded';
    protected $fillable = ['name', 'price', 'total_investment'];
}
