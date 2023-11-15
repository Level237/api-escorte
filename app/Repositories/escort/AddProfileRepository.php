<?php

namespace App\Repositories\escort;

use App\Models\Escort;
use Illuminate\Support\Facades\DB;
use App\Services\Photos\SaveInFolderService;

class AddProfileRepository{

    public function addProfile($data,$photo){
        $newEscort=Escort::create($data);

        if(isset($newEscort)){
            //$image_path = $request->store('products', 'public');
            $saveInFolder=(new SaveInFolderService())->saveIn($photo,'profile');
        }

        return $newEscort;
    }
}
