<?php

namespace App\services\auth;

use App\Interface\auth\LoginInterface;
use App\Repository\auth\LoginRepository;

class LoginService implements LoginInterface{

    public function login($data){

        $dataLogin=(new LoginRepository)->login($data);

        return $dataLogin;
    }
}
