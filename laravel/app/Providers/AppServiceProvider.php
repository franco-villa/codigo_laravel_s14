<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register the events and listeners
        
    }

    // protected $listen = [
    //     Registered::class => [
    //         SendEmailVerificationNotification::class,
    //     ],
    //     \App\Events\ServicioSaved::class=>[     //Evento
    //         \App\Listeners\OptimizeServicioImage::class    //Listener
    //     ]
    //     ];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
