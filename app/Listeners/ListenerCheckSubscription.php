<?php

namespace App\Listeners;

use App\Models\Announcement;
use App\Models\Memberships_user;
use Carbon\Carbon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenerCheckSubscription
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

     //Expiration des subscriptions
    public function handle(object $event)
    {
    $today = Carbon::now();

    $expiredSubscriptions = Memberships_user::where('expire_at', '<', $today)->get();

    foreach ($expiredSubscriptions as $subscription) {
        // Mettre à jour l'abonnement expiré
        $subscription->update(['status' => 0,'expire_at'=>null]);
        $announcement=Announcement::find($subscription->announcement_id);
        if($announcement->isSubscribe == 1){
            $announcement->status=1;
            $announcement->isSubscribe=0;
            $announcement->subscribe_id=0;
            //For test purpose let's set to 1 day instead of 14
            $announcement->expire=Carbon::now()->addDay(7);
            $announcement->save();
        }




        // Envoyer un email ou une notification à l'utilisateur



    }
}
    }

