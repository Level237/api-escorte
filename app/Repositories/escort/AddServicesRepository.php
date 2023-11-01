<?php

namespace App\Repositories\escort;

class AddServicesRepository{

    public function addServices($dataService,$newEscort){
        foreach($dataService as $serviceId){
            $newEscort->services()->attach($serviceId);
        }
    }
}
