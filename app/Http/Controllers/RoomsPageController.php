<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsPageController extends Controller
{
    public function load(string $id) {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', '../style/style.css', '../style/pages/room_details.css'];
        $scripts = ['../scripts/menu.js', '../scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', '../scripts/datePickerRoom.js', '../scripts/swiper-roomDetails.js', '../scripts/updateBookNow.js'];
        $title = 'Ultimate Room';
        $subtitle = 'Room Details';

        $roomData = Room::findOr($id, function () {
            return null;
        });

        if($roomData == null)
        {
            return redirect(route('hotel-index', absolute: false));
        } else {
            $relatedRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(3)->get();
            return view('hotel.rooms-detail-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle,
                'roomData' => $roomData, 'relatedRooms' => $relatedRooms]);
        }
    }
}
