<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckEmailRequest;

class CheckEmailController extends Controller
{
    public function Checkemail (CheckEmailRequest $request){
       
       
        return $request ;

    }
}
