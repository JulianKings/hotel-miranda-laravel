<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RoomsController extends Controller
{
    public function index(Request $request) {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', './style/style.css', './style/pages/rooms.css'];
        $scripts = ['./scripts/menu.js', './scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', './scripts/swiper-rooms.js', './scripts/updateBookNow.js'];
        $title = 'Ultimate Room';
        $subtitle = 'Rooms';
        $roomList = collect(Room::all())->chunk(6);

        $token = $request->input('_token', null);

        if($token != null) {
            $checkin = $request->input('check_in', null);
            $checkout = $request->input('check_out', null);

            if($checkin != null && $checkout != null) {
                $roomList = collect(Room::whereDoesntHave('bookings', function($query) use ($checkin, $checkout) {
                    $query->whereBetween('check_out', [$checkin, $checkout])->orWhereBetween('check_in', [$checkin, $checkout])->orWhere(
                        function($subquery) use ($checkin, $checkout) {
                            $subquery->where('check_in', '<=', $checkin)->where('check_out', '>=', $checkout);
                    });
                })->whereNot('status', 'maintenance')->get())->chunk(6);

            }
        } else {
            $checkin = null;
            $checkout = null;
        }

        return view('hotel.rooms-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle
            , 'roomList' => $roomList, 'checkin' => $checkin, 'checkout' => $checkout]);
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

    public function show(string $id, Request $request) {
        $styles = ['https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', '../style/style.css', '../style/pages/room_details.css'];
        $scripts = ['../scripts/menu.js', '../scripts/socials.js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', '../scripts/datePickerRoom.js', '../scripts/swiper-roomDetails.js', '../scripts/updateBookNow.js'];
        $title = 'Ultimate Room';
        $subtitle = 'Room Details';

        $roomData = Room::findOrFail($id);
        $checkin = $request->input('check_in', null);
        $checkout = $request->input('check_out', null);

        $relatedRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(3)->get();

        if($checkin != null && $checkout != null) {
            $validCheck = (Room::whereDoesntHave('bookings', function($query) use ($checkin, $checkout) {
                $query->whereBetween('check_out', [$checkin, $checkout])->orWhereBetween('check_in', [$checkin, $checkout])->orWhere(
                    function($subquery) use ($checkin, $checkout) {
                        $subquery->where('check_in', '<=', $checkin)->where('check_out', '>=', $checkout);
                });
            })->whereNot('status', 'maintenance')->where('id', $roomData->id)->get())->count() > 0;
        } else {
            $validCheck = false;
        }

        return view('hotel.rooms-detail-page', ['styles' => $styles, 'scripts' => $scripts, 'title' => $title, 'subtitle' => $subtitle,
            'roomData' => $roomData, 'relatedRooms' => $relatedRooms, 'checkin' => $checkin, 'checkout' => $checkout, 'validCheck' => $validCheck]);
    }

    public function storeBooking($id, Request $request) {

        if(Auth::check()) {
            $request->validate([
                'card_number' => ['required', 'string', 'regex:/^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/i', 'max:255'],
                'card_month' => ['required', 'integer', 'max:12', 'min:0'],
                'card_year' => ['required', 'integer', 'max:'.(date('Y') + 30), 'min:'.date('Y')],
                'card_key' => ['required', 'integer', 'max:99999'],
                'card_owner' => ['required', 'string', 'max:255'],
                'check_in' => ['required', 'date'],
                'check_out' => ['required', 'date'],
            ]);

            $booking = Booking::create([
                'client_id' => $request->user()->id,
                'date' => now(),
                'status' => 'in_progress',
                'room_id' => $id,
                'check_in' => Carbon::parse($request->input('check_in')),
                'check_out' => Carbon::parse($request->input('check_out')),
                'notes' => ''
            ]);

            toastify()->success('Booking reserved succesfully!', ['position' => 'center']);

            return redirect(route('bookings.index', absolute: false));
        }
    }
}
