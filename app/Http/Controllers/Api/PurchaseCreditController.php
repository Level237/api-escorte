<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Events\MakePayment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PurchaseCreditController extends Controller
{
    public function purchaseCredit($price,$user_id,$transaction_id){
        $user=User::find(Auth::guard('api')->user()->id);

        $response=Http::acceptJson()->withBody(
            json_encode(
                [
                    "apikey"=>"108089145655d2b949d7a99.42080516",
                    "site_id"=>"5866009",
                    "transaction_id"=>$transaction_id
                  ]),'application/json')->post('https://api-checkout.cinetpay.com/v2/payment/check',[

        ]);

        $payment=json_decode($response);
        $data=$payment->data;
        if($data->status==="ACCEPTED"){
            $user->balance=$user->balance+$price;
            if($user->save()){
                $data=[
                    'payment_type'=>"credit",
                    'price'=>$price,
                    'transaction_id'=>$transaction_id,
                    'user_id'=>Auth::guard('api')->user()->id
                ];

                event(new MakePayment($data));
            }


            return response()->json(['code'=>200,'message'=>'purchase credit successfully','balance'=>"votre nouvelle balance est de $user->balance"]);
        }

    }
}
