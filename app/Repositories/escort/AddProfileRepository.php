<?php

namespace App\Repositories\escort;

use App\Models\Escort;
use Illuminate\Support\Facades\DB;
use App\services\Photos\SaveInFolderService;

class AddProfileRepository{

    public function addProfile($data,$request){
        $newEscort=Escort::create($data);

        if(isset($newEscort)){
            $saveInFolder=(new SaveInFolderService())->saveIn($request,'profile');
        }

        return $newEscort;
    }
}
