<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Membership;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ListenerCheckAdsSubscribe
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event)
    {
        $payments=Payment::where('transaction_id',"!=",null)
        ->where('announcement_id',"!=",null)
        ->where('membership_id',"!=",null)
        ->get();

        if(isset($payments)){
            foreach($payments as $payment){

                $membership=Membership::find($payment->membership_id);
                $announcement=Announcement::find($payment->announcement_id);
                $response=Http::acceptJson()->withBody(
                    json_encode(
                        [
                            "apikey"=>"108089145655d2b949d7a99.42080516",
                            "site_id"=>"5866009",
                            "transaction_id"=>$payment->transaction_id
                          ]),'application/json')->post('https://api-checkout.cinetpay.com/v2/payment/check',[

                ]);

                $payment=json_decode($response);
                $data=$payment->data ?? null;

                if($data->status==="ACCEPTED" && $data!==null){


                        $payment->status="2";
                        $payment->save();
                        //$currentDateTime = Carbon::now();
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
                            return response()->json(["code"=>200,"message"=>"Soubscription au forfait $membership->membership_name avec success."]);

                        }
                }else if($data->status==="REFUSED" && $data!==null){
                    $payment->status="1";
                    $payment->save();

                    return response()->json(['message'=>"payment refused"]);
                }
            }
        }


    }
}
