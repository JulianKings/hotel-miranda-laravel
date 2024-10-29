<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class IndexController extends Controller
{
    public function index()
    {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/index.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/datePicker.js', './scripts/swiper.js'];

        $popularRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(5)->get();

        return view('index', ['styles' => $styles, 'scripts' => $scripts, 'rooms' => $popularRooms]);
    }

    public function indexLong()
    {
        return redirect('/');
    }
}
