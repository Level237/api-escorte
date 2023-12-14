<?php

namespace App\Providers;

use App\Events\EventCheckExpire;
use App\Events\EventCheckSubscription;
use App\Events\MakePayment;
use App\Events\ProfileUserEvent;
use App\Listeners\ListenerCheckExpire;
use App\Listeners\ListenerCheckSubscription;
use App\Listeners\MakePayment as ListenersMakePayment;
use App\Listeners\ProfileUserListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        MakePayment::class => [
            ListenersMakePayment::class,
        ],
        EventCheckSubscription::class=>[
            ListenerCheckSubscription::class,
        ],
       EventCheckExpire::class=>[
        ListenerCheckExpire::class
       ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
