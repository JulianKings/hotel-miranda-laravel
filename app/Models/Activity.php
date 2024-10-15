<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'date', 'notes', 'client_id'
    ];

    protected $hidden = [
        'paid',
    ];
}
