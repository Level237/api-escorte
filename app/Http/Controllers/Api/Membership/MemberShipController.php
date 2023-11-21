<?php

namespace App\Http\Controllers\Api\Membership;
use App\Http\Controllers\Controller;
use App\Http\Resources\MemberShipResource;
use App\Models\MemberShip;


use Illuminate\Http\Request;

class MemberShipController extends Controller
{
    public function index()
    {
        return MemberShipResource::collection(MemberShip::all());
    }
}