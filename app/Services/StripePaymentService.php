<?php

namespace App\Services;

use App\Models\Booking;
use App\Interfaces\PaymentService;
use Illuminate\Support\Facades\File;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\Charge;
use Stripe\Card;

class StripePaymentService implements PaymentService
{
    public function tryPayment($card, $amount): bool
    {
        $stripe = new StripeClient(config('services.payment.stripe.secret'));

        try {
            /*$customer = $stripe->customers->create([
                'name' => $card['card_owner'],
            ]);

            $card = $stripe->customers->createSource($customer->id, ['source' =>[
                'number' => $card['card_number'],
                'exp_month' => $card['card_month'],
                'exp_year' => $card['card_year'],
                'cvc' => $card['card_key'],
                'name' => $card['card_owner'],
                'object' => 'card',
            ]]);*/

            $charge = $stripe->charges->create([
                'amount' => round($amount), // Amount in cents
                'currency' => 'usd',
                //'source' => $card->id,
                'source' => 'tok_mastercard',
                'description' => 'Test Payment',
            ]);

            return true;
        } catch (Exception $e) {
            toastify()->error('Payment failed! ' . $e, ['position' => 'center']);

            return false;
        }
    }
}
