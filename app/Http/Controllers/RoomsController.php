<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use Carbon\Carbon;
use App\Interfaces\PaymentService;
use Illuminate\Support\Facades\Auth;
use App\Utils\RoomUtils;

class RoomsController extends Controller
{
    public function index(Request $request) {
        $token = $request->input('_token', null);
        $roomList = [];

        if($token != null) {
            $checkin = $request->input('check_in', null);
            $checkout = $request->input('check_out', null);

            if($checkin != null && $checkout != null) {
                $roomList = collect(RoomUtils::availableBetweenInterval($checkin, $checkout)->get())->chunk(6);

            }
        } else {
            $checkin = null;
            $checkout = null;
            $roomList = collect(Room::all())->chunk(6);
        }

        return view('hotel.rooms-page', ['roomList' => $roomList, 'checkin' => $checkin, 'checkout' => $checkout]);
    }

    public function offers() {
        $offerList = Room::where('offer', '>', 10)->orderBy('offer', 'desc')->take(8)->get();
        $popularRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(3)->get();

        return view('hotel.offers-page', ['offerList' => $offerList, 'popularRooms' => $popularRooms]);
    }

    public function show(string $id, Request $request) {
        $roomData = Room::findOrFail($id);
        $checkin = $request->input('check_in', null);
        $checkout = $request->input('check_out', null);

        $relatedRooms = Room::withCount('bookings')->orderBy('bookings_count', 'desc')->take(3)->get();

        if($checkin != null && $checkout != null) {
            $validCheck = $roomData->isAvailableOnInterval($checkin, $checkout);
        } else {
            $validCheck = false;
        }

        return view('hotel.rooms-detail-page', ['roomData' => $roomData, 'relatedRooms' => $relatedRooms, 'checkin' => $checkin, 'checkout' => $checkout, 'validCheck' => $validCheck]);
    }

    public function storeBooking($id, Request $request, PaymentService $payment) {

        $roomData = Room::findOrFail($id);

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

            $card = [
                'card_number' => $request->input('card_number'),
                'card_month' => $request->input('card_month'),
                'card_year' => $request->input('card_year'),
                'card_key' => $request->input('card_key'),
                'card_owner' => $request->input('card_owner'),
                'user_id' => $request->user()->id,
                'room_id' => $id
            ];

            $checkinDate = strtotime($request->input('check_in')); // or your date as well
            $checkoutDate = strtotime($request->input('check_out'));
            $datediff = $checkoutDate - $checkinDate;

            $price = $roomData->finalPriceCents() * round($datediff / (60 * 60 * 24));

            if($payment->tryPayment($card, $price)) {
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
            } else {
                //toastify()->error('Payment failed!', ['position' => 'center']);

                return redirect()->back()->withInput()->withErrors(['general' => ['Payment failed.']]);;
            }

        }
    }
}
