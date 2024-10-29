<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AboutController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        return view('hotel.about-page', ['userCount' => $userCount]);
    }
}
