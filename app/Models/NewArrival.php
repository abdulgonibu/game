<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewArrival extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hospital_name',
        'phone',
        'address',
        'image',
        'image_two',
        'description',
        'status',
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
