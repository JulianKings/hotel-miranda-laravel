<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Room extends Model
{
    use HasFactory;

    public function originalPrice()
    {
        return $this->price / 100;
    }

    public function finalPrice()
    {
        return number_format((float)($this->originalPrice() * (1 - $this->offer / 100)), 2, '.', '');
    }

    public function isAvailable(): bool
    {
        return $this->status == 'available';
    }

    public function isBooked(): bool
    {
        return $this->status == 'booked';
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_amenities', 'room_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
}
