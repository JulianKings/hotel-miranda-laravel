<?php

namespace App\Services;

use App\Models\Booking;
use App\Interfaces\PaymentService;
use Illuminate\Support\Facades\File;

class CSVPaymentService implements PaymentService
{
    public function tryPayment($card, $amount): bool
    {
        $path = storage_path('app/public/docs/user_docs/'.$card['user_id'].'/');
        $fileName = 'payments.csv';

        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }

        $columns = null;
        if(!file_exists($path.$fileName)) {
            $columns = array('Card Number', 'Card Expiration', 'Card CVV', 'Card Name', 'User Id', 'Room Id');
        }

        $file = fopen($path.$fileName, 'a');

        if($columns !== null) {
            fputcsv($file, $columns);
        }

        $data = [
            'Card Number' => $card['card_number'],
            'Card Expiration' => $card['card_month'].'/'.$card['card_year'],
            'Card CVV' => $card['card_key'],
            'Card Name' => $card['card_owner'],
            'User Id' => $card['user_id'],
            'Room Id' => $card['room_id']
        ];


        fputcsv($file, $data);
        fclose($file);

        return true;
    }
}
