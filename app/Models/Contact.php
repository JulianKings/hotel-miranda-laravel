<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $dates = ['date'];

    protected $fillable = [
        'customer_name', 'customer_mail', 'customer_phone', 'date', 'subject', 'comment'
    ];
}
