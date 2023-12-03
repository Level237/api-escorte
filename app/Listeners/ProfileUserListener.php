<?php

namespace App\Listeners;

use App\Events\ProfileUserEvent;
use App\Models\Escort;
use App\Models\Profile_visit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class ProfileUserListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProfileUserEvent $event)
    {
        Profile_visit::create([
            'escort_id'=>$event->escort->id,
        ]);
    }
}
