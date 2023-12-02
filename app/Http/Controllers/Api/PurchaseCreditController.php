<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Events\MakePayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PurchaseCreditController extends Controller
{
    public function purchaseCredit($price){
        $user=User::find(Auth::guard('api')->user()->id);
        $user->balance=$user->balance+$price;
        if($user->save()){
            $data=[
                'payment_type'=>"credit",
                'price'=>$price,
                'user_id'=>Auth::guard('api')->user()->id
            ];

            event(new MakePayment($data));
        }


        return response()->json(['code'=>200,'message'=>'purchase credit successfully','balance'=>"votre nouvelle balance est de $user->balance"]);
    }
}
