<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index() {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/offers.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/swiper-offers.js', './scripts/updateBookNow.js'];
        $title = 'Our Offers';
        $subtitle = 'Offers';

        return view('hotel.offers-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle]);
    }
}
