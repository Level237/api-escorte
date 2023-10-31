<?php

namespace App\Http\Controllers\Api\Escort;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileCompleteRequest;
use App\services\escort\ProfileCompleteService;
use Illuminate\Http\Request;

class ProfileCompleteController extends Controller
{
    public function addProfile(ProfileCompleteRequest $request){

        try{
            $data=$request;
            $profileCompleService=(new ProfileCompleteService())->addProfile($data);
            return $request;
        }catch(\Exception $e){

        }
    }
}
