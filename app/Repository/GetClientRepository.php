<?php

namespace App\Repository;

use Laravel\Passport\Client;

class GetClientRepository{

    public function getClient(){
        $client=Client::where("id",2)->first();

        return $client;
    }
}
