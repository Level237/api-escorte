<?php

namespace App\Http\Controllers\Api\User;
use App\Models\Town;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class UpdateUserController extends Controller
{
    public function updateUser(UpdateUserRequest $request){
        $request->validated();
        $User=Auth::guard('api')->user();
        $User->username = $request->username;
        $User->town_id = $request->town;
        $User->phone_number = $request->phone;
        $User->save();
        $User->town = Town::find($User->town_id);
        return $User;
    }
}
