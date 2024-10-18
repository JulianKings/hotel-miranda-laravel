<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class OffersController extends Controller
{
    public function index() {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/offers.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/swiper-offers.js', './scripts/updateBookNow.js'];
        $title = 'Our Offers';
        $subtitle = 'Offers';

        $offerList = Room::where('offer', '>', 10)->orderBy('offer', 'desc')->take(8)->get();
        $popularRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(3)->get();

        return view('hotel.offers-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle,
            'offerList' => $offerList, 'popularRooms' => $popularRooms]);
    }
}
