<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class CreateUserController extends Controller
{

    public function createUser(UserRequest $request){
       

        $validatedData=$request->validated();

        //Validation passed, processing with storage

        $user = new User;
        $user->username = $request->username;
        $user->role_id = $request->role_id;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
    
        if($user->save()){
           
             return response($user, 200)
                  ->header('Content-Type', 'application/json');
        }
        else{
            return response("{error:error}", 500)
                  ->header('Content-Type', 'application/json');
        }
    }
}
