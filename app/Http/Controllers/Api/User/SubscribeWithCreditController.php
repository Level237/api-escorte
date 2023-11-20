<?php

namespace App\Http\Controllers\Api\User;

use App\Events\MakePayment;
use App\Models\User;
use App\Models\Credit;
use App\Models\Membership;
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
                event(new MakePayment($data));
                DB::table('memberships_users')->insert([
                    'user_id'=>$user->id,
                    'membership_id'=>$memberShip_id,
                ]);

            }
        }

    }
}
