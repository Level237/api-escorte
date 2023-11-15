<?php

namespace App\Http\Controllers\Api\List;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ListUserResource;

class ListUserController extends Controller
{
    public function listUser(){
        $users=ListUserResource::collection(User::where('suspended_at',"=",null)->get());

        return $users;
    }

    public function listUserByRole($id){
        $users=ListUserResource::collection(User::where('role_id',$id)->where('suspended_at',"=",null)->get());

        return $users;
    }
}
