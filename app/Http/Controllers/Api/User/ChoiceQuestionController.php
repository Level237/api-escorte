<?php

namespace App\Http\Controllers\Api\User;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChoiceQuestionRequest;
use App\Models\Question;

class ChoiceQuestionController extends Controller
{
    public function choice(ChoiceQuestionRequest $request){

        try{
            $userId=Auth::guard('api')->user()->id;
            $user=User::find($userId);
        $answer=$request->answer;
        $questions=$user->questions;


        $user->questions()->attach($request->question_id,['answer'=>$request->answer]);
            Auth::guard('api')->user()->isSecure=1;
        return response()->json(["message"=>$user->questions]);
        }catch(Exception $e){

            return response()->json(["message"=>$e->getMessage()]);
        }

    }
}
