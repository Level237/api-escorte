<?php

namespace App\services\auth;

use App\Interface\auth\NewAccountInterface;

class CreateAccountService implements NewAccountInterface{

    public function createAccount(string $username, ?string $email = null, string $phone_number, string $password, string $scope)
    {

    }
}

