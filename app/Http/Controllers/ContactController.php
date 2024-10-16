<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $styles = ['./style/style.css', './style/pages/contact.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js'];
        $title = 'New Details';
        $subtitle = 'Blog';

        return view('hotel.contact-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle]);
    }
}
