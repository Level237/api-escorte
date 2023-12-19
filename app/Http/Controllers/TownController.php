<?php

namespace App\Http\Controllers;
use App\Http\Resources\TownResource;
use App\Http\Requests\TownRequest;
use Illuminate\Http\Request;
use App\Models\Town;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return TownResource::collection(Town::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TownRequest $request)
    {
     
        $validatedData=$request->validated();
         $town = Town::create([
            'town_name' => $request->town_name,
            'code' => $request->code,
            'country_id' => $request->country_id,

        ]);

        return new TownResource($town);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
