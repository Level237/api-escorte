<?php

namespace App\Http\Controllers\Api\Ads;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\AdsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class CreateAdsController extends Controller
{

    public function createAds(AdsRequest $request){

        $validatedData=$request->validated();

        //Validation passed, processing with storage

        $ads = new Announcement;
        $ads->user_id = Auth::guard('api')->user()->id;
        $ads->town_id = $request->town_id;
        $ads->quarter_id = $request->quarter_id;
        $ads->announcement_category_id = $request->category_id;
        $ads->accepted= $request->accepted;
        $ads->location = $request->location;
        $ads->title = $request->title;
        $ads->age = $request->age;
        $ads->gender = $request->gender;
        $ads->whatsapp = $request->phone;
        $ads->services = $request->services;
        $ads->description = $request->description;
        $ads->expire=Carbon::now()->addDay(14);
        if($ads->save()){

             return response($ads, 200)
                  ->header('Content-Type', 'application/json');
        }
        else{
            return response("{error:error}", 500)
                  ->header('Content-Type', 'application/json');
        }
    }

    public function update(Request $request){

        $ad = Announcement::findOrFail($request->id);
        if(!$ad)
            return response('Ads not found', 400)
                  ->header('Content-Type', 'application/json');
        else{

            $ad->town_id = $request->town_id;
            $ad->quarter_id = $request->quarter_id;
            $ad->announcement_category_id = $request->category_id;
            $ad->accepted= $request->accepted;
            $ad->location = $request->location;
            $ad->title = $request->title;
            $ad->age = $request->age;
            $ad->gender = $request->gender;
            $ad->whatsapp = $request->phone;
            $ad->services = $request->services;
            $ad->description = $request->description;
            $ad->save();
             return response($ad, 200)
                  ->header('Content-Type', 'application/json');
        }

    }

}
