<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Memberships_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPurchaseController extends Controller
{
    public function myPurchase(){
        $myPurchase=Memberships_user::where('user_id',Auth::guard('api')->user()->id)->get();

        return $myPurchase;
    }
}
