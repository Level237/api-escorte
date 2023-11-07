<?php

namespace App\Http\Controllers\Api\Escort;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Escort;
use Illuminate\Support\Facades\Auth;

class EscortIsCompletedOrNotController extends Controller
{
    public function isCompletedOrNot(){
        $user=Auth::guard('api')->user()->id;
        $escort=Escort::where('user_id',$user)->first();
        if(empty($escort)){
            return response()->json(['message'=>"profile not completed","completed"=>0]);
        }else{
            return response()->json(['message'=>"profile completed","completed"=>1]);
        }

    }
}
