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

class DeleteAdsController extends Controller
{

    public function delete($id){

        $ad = Announcement::findOrFail($id);
        if(!$ad)
            return response('Ads not found', 400)
                  ->header('Content-Type', 'application/json');
        else{
            $ad->delete();
             return response("Ads delete successfully", 200)
                  ->header('Content-Type', 'application/json');
        }
       
      
    }

}
