<?php
namespace App\services\escort;

use App\Repositories\escort\AddProfileRepository;
use Illuminate\Support\Facades\Auth;

class ProfileCompleteService{

    public function addProfile($request){



        $pathImage='profile/'.time() . '.' . $request->file('photo')->getClientOriginalExtension();
        $data=[
            'whatsapp_number'=>$request->whatsapp_number,
            'sexuality'=>$request->sexuality,
            'quarter_id'=>$request->quarter_id,
            'user_id'=>Auth::guard('api')->user()->id,
            'photo'=>$pathImage
        ];

        if(isset($request->description)){
            $data['description']=$request->description;
        }else if(isset($request->year_of_birth)){
            $data['year_of_birth']=$request->year_of_birth;
        }else if(isset($request->body_shape_id)){
            $data['body_shape_id']=$request->body_shape_id;
        }
        $addProfileRepository=(new AddProfileRepository())->addProfile($data,$request->file('photo'));

        return $addProfileRepository;
    }
}
