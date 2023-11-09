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
       

        // $recaptcha_response = $request->input('recaptcha');
        

        // if (is_null($recaptcha_response)) {
    
        //      return response("{error:Please Complete the Recaptcha to proceed}", 400)
        //           ->header('Content-Type', 'application/json');
        // }

        // $url = "https://www.google.com/recaptcha/api/siteverify";

        // $body = [
        //     'secret' => config('services.recaptcha.secret'),
        //     'response' => $recaptcha_response,
        //     'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        // ];

        // $response = Http::asForm()->post($url, $body);

        // $result = json_decode($response);

        // if (!$response->successful() && $result->success == false) {

        //    return response("{error:Please Complete the Recaptcha Again to proceed}", 400)
        //           ->header('Content-Type', 'application/json');

        // } 

        $validatedData=$request->validated();

        //Validation passed, processing with storage
       
        $ads = new Announcement;
        $ads->user_id = $request->user_id;
        $ads->town_id = User::find($request->user_id)->Escort[0]->quarter->town->id;
        $ads->announcement_category_id = $request->category_id;
        $ads->accepted= $request->accepted;
        $ads->location = $request->location;
        $ads->title = $request->title;
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
}
