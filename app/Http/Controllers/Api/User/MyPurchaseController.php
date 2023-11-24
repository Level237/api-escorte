<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use App\Models\Memberships_user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\MyPurchaseResource;

class MyPurchaseController extends Controller
{
    public function myPurchase(){
        $myPurchase=MyPurchaseResource::collection(Memberships_user::where('user_id',Auth::guard('api')->user()->id)->get());

        return $myPurchase;
    }

    public function initPaymentMomo(Request $request){

        $response=Http::acceptJson()->withBody(
            json_encode(
                [
                    "amount"=>$request->price,
                    "currency"=>"XAF",
                    "apikey"=> "108089145655d2b949d7a99.42080516",
                    "site_id"=>"5866009",
                    "transaction_id"=>"REFID".rand(123456, 999999),
                    "description"=>"Paiement d'un abonnement",
                    "return_url"=>"https://www.exemple.com/return",
                    "notify_url"=>"https://www.exemple.com/notify",
                    "metadata"=>"user".Auth::guard('api')->user()->id,
                    "customer_id"=>Auth::guard('api')->user()->id,
                    "customer_name"=>Auth::guard('api')->user()->username,
                    "customer_surname"=>Auth::guard('api')->user()->username,
                    "channels"=>"MOBILE_MONEY",
                  ]),'application/json')->post('https://api-checkout.cinetpay.com/v2/payment',[

        ]);

        return json_decode($response);
    }

    public function verify($token){


        $response=Http::acceptJson()->withBody(
            json_encode(
                [
                    "apikey"=> "108089145655d2b949d7a99.42080516",
                    "site_id"=>"5866009",
                  "token"=>$token
                  ]),'application/json')->post('https://api-checkout.cinetpay.com/v2/payment/check',[

        ]);

        return json_decode($response);
    }
}
