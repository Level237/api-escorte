<?php

namespace App\Http\Controllers;
use App\Models\Escort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function index(){

        $locations = DB::table('escorts')
                 ->select('quarter_id', DB::raw('count(*) as total'))
                 ->groupBy('quarter_id')
                 ->get();

        if($locations){
           
             return response($locations, 200)
                  ->header('Content-Type', 'application/json');
        }
        else{
            return response("{error:Unable to fetch location}", 500)
                  ->header('Content-Type', 'application/json');
        }
    }
}
