<?php

// app/Models/WalletTransaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    protected $fillable = [
        'user_id',
        'wallet_balance',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

