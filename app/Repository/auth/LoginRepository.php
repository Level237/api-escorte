<?php

namespace App\Repository\auth;

use App\Models\User;

class LoginRepository{

    public function login($data){

        $user=User::where("phone_number",$data["phone_number"])->first();

        return $user;
    }
}
