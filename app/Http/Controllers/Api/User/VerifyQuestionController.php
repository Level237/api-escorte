<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;

class VerifyQuestionController extends Controller
{
    public function verify(Request $request){

        $user=User::where('phone_number',$request->phone_number)->first();
        $questions=$user->questions;

        if($user->isSecure==0){
            return response()->json(["error"=>true,"message"=>"You don't have yet securise your account"],404);
        }else{

            return response()->json(['question'=>$questions],200);
        }

    }
}
