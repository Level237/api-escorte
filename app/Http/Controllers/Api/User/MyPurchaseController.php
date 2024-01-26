<?php

namespace App\Http\Controllers\Api\User;

use App\Events\EventCheckSubscription;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Membership;
use App\Events\MakePayment;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\Memberships_user;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\MyPurchaseResource;

class MyPurchaseController extends Controller
{
    public function myPurchase(){

        event(new EventCheckSubscription());
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
                    "return_url"=>"http://127.0.0.1:8000/dashboard/ads",
                    "notify_url"=>"http://127.0.0.1:8000/congrate",
                    "metadata"=>"user".Auth::guard('api')->user()->id,
                    "customer_id"=>Auth::guard('api')->user()->id,
                    "customer_name"=>Auth::guard('api')->user()->username,
                    "customer_surname"=>Auth::guard('api')->user()->username,
                    "channels"=>"MOBILE_MONEY",
                  ]),'application/json')->post('https://api-checkout.cinetpay.com/v2/payment',[

        ]);

        return json_decode($response);
    }

    public function verify($memberShip_id,$announcement_id){

        $user=User::find(Auth::guard('api')->user()->id);
        $memberShip=Membership::find($memberShip_id);
        $announcement=Announcement::where('id',$announcement_id)->where('user_id',$user->id)->first();





            $data=[
                'payment_type'=>"MOBILE_MONEY",
                'price'=>$memberShip->price,
                'user_id'=>Auth::guard('api')->user()->id
            ];
            $payment=event(new MakePayment($data));
            //$currentDateTime = Carbon::now();
            $newDateTime = Carbon::now()->addDay(21);
            $newDateTime->setTimezone('Africa/Douala');
            $announcement->status=1;
            $announcement->isSubscribe=1;
            $announcement->expire=null;
            $announcement->subscribe_id=$memberShip_id;
            if($announcement->save()){
                DB::table('memberships_users')->insert([
                    'user_id'=>$user->id,
                    'membership_id'=>$memberShip_id,
                    'payment_id'=>$payment[0]->id,
                    'expire_at'=>$newDateTime,
                    'announcement_id'=>$announcement_id,
                    'status'=>1
                ]);
                return response()->json(["code"=>200,"message"=>"Soubscription au forfait $memberShip->membership_name avec success."]);
            }else{
                return response()->json(["message"=>"une erreur s'est produite"]);
            }



    }

    public function subscribeUserWithCredit(){
        $user=User::find(Auth::guard('api')->user()->id);
        $memberShip=Membership::find(4);

        if($user->balance < $memberShip->price){
            return response()->json(['code'=>500,'message'=>"votre nombre de crédit est insuffisant pour souscrire à cet abonnement"],500);
        }else{
            $user->isSubscribe=1;
            $user->balance=$user->balance - $memberShip->price;
            if($user->save()){
                $data=[
                    'payment_type'=>"credits",
                    'price'=>$memberShip->price,
                    'user_id'=>Auth::guard('api')->user()->id
                ];
                $payment=event(new MakePayment($data));
                $newDateTime = Carbon::now()->addDay(intval($memberShip->period));
                $newDateTime->setTimezone('Africa/Douala');
                DB::table('members')->insert([
                    'user_id'=>$user->id,
                    'membership_id'=>4,
                    'payment_id'=>$payment[0]->id,
                    'expire_at'=>$newDateTime,
                    'status'=>1
                ]);

                return response()->json(["code"=>200,"message"=>"Soubscription au forfait $memberShip->membership_name avec success."]);
            }

        }

    }

    public function subscribeUserWithMomo(){
        $user=User::find(Auth::guard('api')->user()->id);
        $memberShip=Membership::find(4);


            $user->isSubscribe=1;

            if($user->save()){
                $data=[
                    'payment_type'=>"mobile money",
                    'price'=>$memberShip->price,
                    'user_id'=>Auth::guard('api')->user()->id
                ];
                $payment=event(new MakePayment($data));
                $newDateTime = Carbon::now()->addDay(intval($memberShip->period));
                $newDateTime->setTimezone('Africa/Douala');
                DB::table('members')->insert([
                    'user_id'=>$user->id,
                    'membership_id'=>4,
                    'payment_id'=>$payment[0]->id,
                    'expire_at'=>$newDateTime,
                    'status'=>1
                ]);

                return response()->json(["code"=>200,"message"=>"Soubscription au forfait $memberShip->membership_name avec success."]);


        }

    }

}
