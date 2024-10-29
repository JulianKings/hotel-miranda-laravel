<?php

namespace App\Utils;

use App\Models\Room;

class RoomUtils
{
    public static function availableBetweenInterval($checkin, $checkout)
    {
        return Room::whereDoesntHave('bookings', function($query) use ($checkin, $checkout) {
            $query->whereBetween('check_out', [$checkin, $checkout])->orWhereBetween('check_in', [$checkin, $checkout])->orWhere(
                function($subquery) use ($checkin, $checkout) {
                    $subquery->where('check_in', '<=', $checkin)->where('check_out', '>=', $checkout);
            });
        })->whereNot('status', 'maintenance');
    }
}
