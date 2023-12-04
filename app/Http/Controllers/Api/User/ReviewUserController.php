<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewUserController extends Controller
{
    public function addReview(Request $request,$escort_id){
        $newReview=new Review;
        $newReview->user_id=Auth::guard('api')->user()->id;
        $newReview->escort_id=$escort_id;
        $newReview->stars=$request->stars;
        $newReview->comment=$request->comment;
        $newReview->save();

        return response()->json(["code"=>200,"message"=>"reviews ajouté avec success"],200);
    }

    public function getReview($escortId){
        $getReview=ReviewResource::collection(Review::where('escort_id',$escortId)->get());

        return $getReview;
    }
}
