<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FilterAdsController extends Controller
{
    public function filter(Request $request){
        $results=DB::table('announcements')
        ->join('towns','towns.id','announcements.town_id')
        ->join('quarters','quarters.id','announcements.quarter_id')
        ->select('announcements.id','quarters.quarter_name','towns.town_name','announcements.subscribe_id','announcements.age','quarters.quarter_name','escorts.description')
        ->orWhere('towns.town_name','=',$request->town)
        ->orWhere('quarters.quarter_name','=',$request->quarter)
        ->orWhere('announcements.subscribe_id','=',$request->subscribe_id)
        ->orWhere('announcements.age','=',$request->age)
        ->get();

        return response()->json(['data'=> $results],200);
    }
}
