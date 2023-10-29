<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
class CurrentUserController extends Controller
{
    public function currentUser(){
        $User=Auth::guard('api')->user();
        return $User;
    }
}
