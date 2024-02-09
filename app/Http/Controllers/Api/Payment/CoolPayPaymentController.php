<?php

namespace App\Http\Controllers\Api\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CoolPayPaymentController extends Controller
{
    public function payAds(Request $request){
        $response=Http::acceptJson()->withBody(
            json_encode(
                [
                    "transaction_amount"=>$request->price,
                    "transaction_currency"=>"XAF",
                    "transaction_reason"=> "Abonnement Annonce",
                    "app_transaction_ref"=>$request->transaction_id,
                    "customer_phone_number"=>Auth::guard('api')->user()->phone_number,
                    "customer_name"=>Auth::guard('api')->user()->username,
                    "customer_email"=>Auth::guard('api')->user()->email,
                    "customer_lang"=>"fr",
                  ]),'application/json')->post('https://my-coolpay.com/api/118a4852-7df8-46d9-834b-23b4ef25aaab/paylink',[

        ]);

        return json_decode($response);
    }
}
