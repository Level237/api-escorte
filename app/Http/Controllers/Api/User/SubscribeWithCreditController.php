<?php

namespace App\Http\Controllers\Api\User;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Credit;
use App\Models\Membership;
use App\Events\MakePayment;
use Illuminate\Http\Request;
use App\Models\Memberships_user;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubscribeWithCreditController extends Controller
{
    public function subscribe($memberShip_id){
        $user=User::find(Auth::guard('api')->user()->id);
        $memberShip=Membership::find($memberShip_id);
        $credit=Credit::find($memberShip->credit_id);

        if($user->balance < $credit->credit){
            return response()->json(['code'=>500,'message'=>"votre nombre de crédit est insuffisant pour souscrire à cet abonnement"],500);
        }else{
            $creditUser=$user->balance-$credit->credit;
            $user->balance=$creditUser;

            if($user->save()){
                $data=[
                    'payment_type'=>"credits",
                    'credits_number'=>$credit->credit
                ];
                $payment=event(new MakePayment($data));
                $currentDateTime = Carbon::now();
                $newDateTime = Carbon::now()->addDay(30);
                $newDateTime->setTimezone('Africa/Douala');
                DB::table('memberships_users')->insert([
                    'user_id'=>$user->id,
                    'membership_id'=>$memberShip_id,
                    'payment_id'=>$payment[0]->id,
                    'expire_at'=>$newDateTime,
                    'status'=>1
                ]);

                return response()->json(["code"=>200,"message"=>"Soubscription au forfait $memberShip->membership_name avec success.","balance"=>"Solde restant $creditUser pièce(s)"]);

            }
        }

    }
}
