<?php

namespace App\Http\Controllers\Api\Membership;

use App\Events\EventCheckExpire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\EventCheckSubscription;
use App\Events\EventCheckUpgradePlan;

class CheckSubscriptionController extends Controller
{
    public function check(){
        event(new EventCheckSubscription());
        event(new EventCheckExpire());
        event(new EventCheckUpgradePlan());
        return response()->json(['message'=>"ok"]);
    }
}
