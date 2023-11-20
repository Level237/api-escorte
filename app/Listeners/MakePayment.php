<?php

namespace App\Listeners;

use App\Events\MakePayment as EventsMakePayment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class MakePayment
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
    public function handle(EventsMakePayment $event): void
    {

    }
}
