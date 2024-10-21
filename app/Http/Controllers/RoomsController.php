<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function index() {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/rooms.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/swiper-rooms.js', './scripts/updateBookNow.js'];
        $title = 'Ultimate Room';
        $subtitle = 'Rooms';
        $roomList = collect(Room::all())->chunk(6);

        return view('hotel.rooms-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle
            , 'roomList' => $roomList]);
    }

    public function offers() {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/offers.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/swiper-offers.js', './scripts/updateBookNow.js'];
        $title = 'Our Offers';
        $subtitle = 'Offers';

        $offerList = Room::where('offer', '>', 10)->orderBy('offer', 'desc')->take(8)->get();
        $popularRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(3)->get();

        return view('hotel.offers-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle,
            'offerList' => $offerList, 'popularRooms' => $popularRooms]);
    }

    public function show(string $id) {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', '../style/style.css', '../style/pages/room_details.css'];
        $scripts = ['../scripts/menu.js', '../scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', '../scripts/datePickerRoom.js', '../scripts/swiper-roomDetails.js', '../scripts/updateBookNow.js'];
        $title = 'Ultimate Room';
        $subtitle = 'Room Details';

        $roomData = Room::findOrFail($id);

        $relatedRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(3)->get();

        return view('hotel.rooms-detail-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle,
            'roomData' => $roomData, 'relatedRooms' => $relatedRooms]);
    }
}
