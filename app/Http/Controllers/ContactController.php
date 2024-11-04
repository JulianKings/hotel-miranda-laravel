<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\MailableContact;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

class ContactController extends Controller
{
    public function index() {
        $client = new Client();
        $response = $client->request('GET', 'https://api.unsplash.com/search/photos?page=1&query=luxurious hotel', ['headers' => ['Authorization' => 'Client-ID ' . env('UNSPLASH_API_KEY')]]);
        $data = json_decode($response->getBody()->getContents(), true);
        $photos = $data['results'];
        $firstPhoto = $photos[0]['urls']['regular'];
        if(!isset($firstPhoto)) {
            $firstPhoto  = URL::to('/').'/assets/hotel.png';
        }

        return view('hotel.contact-page', ['photoUrl' => $firstPhoto]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'regex:/^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{3}$/i', 'string', 'max:30'],
            'email' => ['required', 'email:rfc,dns', 'string', 'max:100'],
            'subject' => ['required', 'string', 'max:500'],
            'message' => ['required', 'string', 'max:5000']
        ]);

        $contact = Contact::create([
            'customer_name' => $request->input('name'),
            'customer_mail' => $request->input('email'),
            'customer_phone' => $request->input('phone'),
            'date' => now(),
            'status' => 'active',
            'subject' => $request->input('subject'),
            'comment' => $request->input('message')
        ]);

        Mail::to($contact->customer_mail)->send(new MailableContact());

        toastify()->success('Contact form sent succesfully!', ['position' => 'center', 'duration' => 8000]);

        return redirect(route('hotel.index', absolute: false));
    }
}
