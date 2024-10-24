<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PaymentService;
use App\Services\PaypalPaymentService;

class PaypalPaymentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentService::class, PaypalPaymentService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
