<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Utils\RoomUtils;

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

    public function finalPriceCents()
    {
        return number_format((float)($this->price * (1 - $this->offer / 100)), 2, '.', '');
    }

    public function isAvailable(): bool
    {
        return $this->isAvailableOnInterval(now(), now()->addDays(7));
    }

    public function isAvailableOnInterval($checkin, $checkout)
    {
        return (RoomUtils::availableBetweenInterval($checkin, $checkout)->where('id', $this->id)->get())->count() > 0;
    }

    public function isUnavailable(): bool
    {
        return $this->status == 'maintenance';
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_amenities', 'room_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'room_id', 'id');
    }
}
