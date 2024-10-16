<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsPageController extends Controller
{
    public function index() {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/room_details.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/datePickerRoom.js', './scripts/swiper-roomDetails.js', './scripts/updateBookNow.js'];
        $title = 'Ultimate Room';
        $subtitle = 'Room Details';

        return view('hotel.rooms-detail-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle]);
    }
}
