<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        return view('bookings.index', [
            'bookings' => Auth::user()->bookings()->get(),
        ]);
    }
}
