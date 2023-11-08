<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyQuestionController extends Controller
{
    public function verify(Request $request){

        $user=User::where('phone_number');

        $questions=$user->questions();

        return response()->json(["questions"=>$questions]);
    }
}
