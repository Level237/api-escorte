<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseCreditController extends Controller
{
    public function purchaseCredit($price){
        $user=User::find(Auth::guard('api')->user()->id);
        $user->balance=$user->balance+$price;
        $user->save();

        return response()->json(['code'=>200,'message'=>'purchase credit successfully','balance'=>"votre nouvelle balance est de $user->balance"]);
    }
}
