<?php

namespace App\Http\Controllers\Api\Membership;
use App\Http\Controllers\Controller;
use App\Http\Resources\MemberShipResource;
use App\Models\Membership;


use Illuminate\Http\Request;

class MemberShipController extends Controller
{
    public function index()
    {
        return MemberShipResource::collection(Membership::all());
    }

    public function show($id)
    {
        return MemberShipResource::collection(Membership::find($id));
    }
}
