<?php

namespace App\Http\Controllers\Api\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;

class StatController extends Controller
{
    public function users(){

        $dateFrom = Carbon::now()->subDays(30);
        $dateTo = Carbon::now();

        $monthly = User::where('suspended_at',"=",null)->whereBetween('created_at', [$dateFrom, $dateTo])->count();
        $previousDateFrom = Carbon::now()->subDays(60);
        $previousDateTo = Carbon::now()->subDays(31);
        $previousMonthly = User::where('suspended_at',"=",null)->whereBetween('created_at', [$previousDateFrom, $previousDateTo])->count();
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

    public function escorts(){

        $dateFrom = Carbon::now()->subDays(30);
        $dateTo = Carbon::now();

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

    public function statIncomes(){
        $dateFrom = Carbon::now()->subDays(30);
        $dateTo = Carbon::now();
        $incomes=Payment::whereBetween('created_at', [$dateFrom, $dateTo])->get();
        $monthly=Payment::whereBetween('created_at', [$dateFrom, $dateTo])->count();
        $total=$incomes->sum('price');
        $previousDateFrom = Carbon::now()->subDays(60);
        $previousDateTo = Carbon::now()->subDays(31);
        $previousMonthly = User::where('role_id',2)->whereBetween('created_at', [$previousDateFrom, $previousDateTo])->count();
        if ($previousMonthly < $monthly) {
            if ($previousMonthly > 0) {
                $percent_from = $monthly - $previousMonthly;
                (int)  $percent = ($previousMonthly * 100)/$percent_from ; //increase percent
                return response()->json(['monthly'=>$monthly,'percent'=>number_format($percent),'total'=>$total]);
            } else {
                (int) $percent = 100;
                return response()->json(['monthly'=>$monthly,'percent'=>number_format($percent),'total'=>$total]);
            }
        } else {
            $percent_from = $previousMonthly - $monthly;
            (int) $percent = ($previousMonthly * 100)/$percent_from ;

            return response()->json(['monthly'=>$monthly,'percent'=>number_format($percent),'total'=>$total]);
        }

    }
}
