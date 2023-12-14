<?php

namespace App\Http\Controllers\Api\Membership;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\EventCheckSubscription;

class CheckSubscriptionController extends Controller
{
    public function check(){
        event(new EventCheckSubscription());
        return response()->json(['message'=>"ok"]);
    }
}
