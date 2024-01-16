<?php

namespace App\Http\Controllers\Api\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatController extends Controller
{
    public function users(){
        $users=User::where('suspended_at',"=",null)->count();

        return $users;

    }

    public function escorts(){

        $dateFrom = Carbon::now()->subDays(30);
        $dateTo = Carbon::now();
        $percent_from="";
        $monthly = User::where('role_id',2)->whereBetween('created_at', [$dateFrom, $dateTo])->count();
        $previousDateFrom = Carbon::now()->subDays(60);
        $previousDateTo = Carbon::now()->subDays(31);
        $previousMonthly = User::where('role_id',2)->whereBetween('created_at', [$previousDateFrom, $previousDateTo])->count();
        if ($previousMonthly < $monthly) {
            if ($previousMonthly > 0) {
                $percent_from = $monthly - $previousMonthly;
                (int)  $percent = ($previousMonthly * 100)/$percent_from ; //increase percent
                return response()->json(['monthly'=>$monthly,'percent'=>number_format($percent)]);
            } else {
                (int) $percent = 100;
                return response()->json(['monthly'=>$monthly,'percent'=>number_format($percent)]);
            }
        } else {
            $percent_from = $previousMonthly - $monthly;
            (int) $percent = ($previousMonthly * 100)/$percent_from ;

            return response()->json(['monthly'=>$monthly,'percent'=>number_format($percent)]);
        }


    }
}
