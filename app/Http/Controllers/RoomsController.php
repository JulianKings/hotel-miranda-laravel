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
        $roomList = collect(Room::where('status', 'available')->get())->chunk(6);

        return view('hotel.rooms-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle
            , 'roomList' => $roomList]);
    }
}
