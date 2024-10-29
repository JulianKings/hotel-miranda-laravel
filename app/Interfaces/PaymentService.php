<?php

namespace App\Interfaces;

interface PaymentService {
    public function tryPayment($card, $amount): bool;
}
