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
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class SubscribeWithCreditController extends Controller
{
    public function subscribe($memberShip_id,$announcement_id){
        $user=User::find(Auth::guard('api')->user()->id);
        $memberShip=Membership::find($memberShip_id);
        $announcement=Announcement::where('id',$announcement_id)->where('user_id',$user->id)->first();
        $memberShipUser=Memberships_user::where('announcement_id',$announcement_id)->first();

        if($user->balance < $memberShip->price){
            return response()->json(['code'=>500,'message'=>"votre nombre de crédit est insuffisant pour souscrire à cet abonnement"],500);
        }else if(empty($announcement)){
            return response()->json(['code'=>404,'message'=>"Annonce introuvable"],404);
        }

        else{
            if(isset($memberShipUser)){
                return response()->json(['code'=>403,'message'=>"cet Annonce contient deja un abonnement courrant"],404);
            }else{
                $creditUser=$user->balance-$memberShip->price;
                $user->balance=$creditUser;

                if($user->save()){
                    $data=[
                        'payment_type'=>"credits",
                        'price'=>$memberShip->price
                    ];
                    $payment=event(new MakePayment($data));
                    //$currentDateTime = Carbon::now();
                    $newDateTime = Carbon::now()->addDay(30);
                    $newDateTime->setTimezone('Africa/Douala');
                    $announcement->status=1;
                    $announcement->isSubscribe=1;
                    $announcement->save();
                    DB::table('memberships_users')->insert([
                        'user_id'=>$user->id,
                        'membership_id'=>$memberShip_id,
                        'payment_id'=>$payment[0]->id,
                        'expire_at'=>$newDateTime,
                        'announcement_id'=>$announcement_id,
                        'status'=>1
                    ]);

                    return response()->json(["code"=>200,"message"=>"Soubscription au forfait $memberShip->membership_name avec success.","balance"=>"Solde restant $creditUser pièce(s)"]);

            }


            }
        }

    }
}