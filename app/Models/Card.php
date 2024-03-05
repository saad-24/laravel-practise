<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['card_number', 'expiry_date', 'cvv', 'card_name','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
