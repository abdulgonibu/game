<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrow extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount_withdrow',
        'payment_method',
        'account_type',
        'account_number',
        'status',
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
