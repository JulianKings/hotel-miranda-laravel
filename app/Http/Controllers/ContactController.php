<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('hotel.contact-page');
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

        toastify()->success('Contact form sent succesfully!', ['position' => 'center', 'duration' => 8000]);

        return redirect(route('hotel.index', absolute: false));
    }
}
