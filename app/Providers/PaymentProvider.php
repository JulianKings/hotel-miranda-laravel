<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PaymentService;
use App\Services\CSVPaymentService;
use App\Services\StripePaymentService;

class PaymentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        switch(config('services.payment.provider')) {
            default:
            case 'csv':
                $this->app->bind(PaymentService::class, CSVPaymentService::class);
                break;
            case 'stripe':
                $this->app->bind(PaymentService::class, StripePaymentService::class);
                break;
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
