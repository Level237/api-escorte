<?php

namespace App\Http\Controllers\Api\Payment;

use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Membership;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
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
                  ]),'application/json')->post('https://my-coolpay.com/api/058196db-98d7-4fc2-9988-82e2e14b2b8e/paylink',[

        ]);

        return json_decode($response);
    }

    public function callbackAds(Request $request){
        $user=User::where('phone_number',$request->customer_phone_number)->first();
        $payment=Payment::where('user_id',$user->id)->latest('id')->first();

        if($request->transaction_status==="SUCCESS"){

           $payment->status="2";
           $payment->save();
           $membership=Membership::find($payment->membership_id);
            $announcement=Announcement::find($payment->announcement_id);
            $newDateTime = Carbon::now()->addDay(intval($membership->period));
            $newDateTime->setTimezone('Africa/Douala');
            $announcement->status=1;
            $announcement->isSubscribe=1;
            $announcement->expire=null;
            $announcement->subscribe_id=$membership->id;
            if($announcement->save()){
                DB::table('memberships_users')->insert([
                    'user_id'=>$payment->user_id,
                    'membership_id'=>$membership->id,
                    'payment_id'=>$payment->id,
                    'expire_at'=>$newDateTime,
                    'announcement_id'=>$announcement->id,
                    'status'=>1
                ]);
            }
        }else if($request->transaction_status==="FAILED"){
            $payment->status="1";
            $payment->save();
        }
    }
}
