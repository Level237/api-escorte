<?php

namespace App\Http\Controllers\Api\Ads;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AdsRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class CreateAdsController extends Controller
{

    public function createAds(AdsRequest $request){

        $validatedData=$request->validated();

        //Validation passed, processing with storage
       
        $ads = new Announcement;
        $ads->user_id = $request->user_id;
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

            $ad->announcement_category_id = $request->category_id;
            $ad->accepted= $request->accepted;
            $ad->location = $request->location;
            $ad->title = $request->title;
            $ad->description = $request->description;
            $ad->save();
             return response($ad, 200)
                  ->header('Content-Type', 'application/json');
        }
          
    }

}
