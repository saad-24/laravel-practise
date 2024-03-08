<?php

// app/Models/WalletLog.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WalletLog extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'status',
        'date',
        'amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
