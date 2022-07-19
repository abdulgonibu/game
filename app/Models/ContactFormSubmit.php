<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormSubmit extends Model
{
    use HasFactory;

    protected $fillable = [
        'reserv_name',
        'date',
        'reserv_time',
        'reserv_persons',
        'email',
        'phone',
        'table',
        'nid_number',
        'place',
    ];
}
