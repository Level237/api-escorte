<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatController extends Controller
{
    public function users(){
        $users=User::where('suspended_at',"!=",null)->count();

        return $users;
    }

    public function escorts(){
        $escorts=User::where('role_id',2)->count();

        return $escorts;
    }
}
