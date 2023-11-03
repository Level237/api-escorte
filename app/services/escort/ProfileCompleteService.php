<?php
namespace App\services\escort;

use App\Repositories\escort\AddProfileRepository;
use App\Repositories\escort\AddServicesRepository;
use Illuminate\Support\Facades\Auth;

class ProfileCompleteService{

    public function addProfile($request){



        $pathImage='profile/'.time().'-'.$request->file('photo')->getClientOriginalName();
        $data=[
            "escort_name"=>$request->escort_name,
            'whatsapp_number'=>$request->whatsapp_number,
            'sexuality'=>$request->sexuality,
            'quarter_id'=>$request->quarter_id,
            'user_id'=>Auth::guard('api')->user()->id,
            'photo'=>$pathImage,
            "year_of_birth"=>$request->year_of_birth,
            'body_shape_id'=>$request->body_shape_id,
            "ethnic_id"=>$request->ethnic_id,
            "description"=>$request->description,
            "height_id"=>$request->height_id,
            "weight_id"=>$request->weight_id,
            "skin_color_id"=>$request->skin_color_id,
            "isCompleted"=>1
        ];

        if(isset($request->email) && Auth::guard('api')->user()->email ==null){
            Auth::guard('api')->user()->email=$request->email;
        }
        $addProfileRepository=(new AddProfileRepository())->addProfile($data,$request->file('photo'));
        if(isset($addProfileRepository)&& $request->services){
            $newServices=(new AddServicesRepository())->addServices($request->services,$addProfileRepository);
        }
        return $addProfileRepository;
    }
}
