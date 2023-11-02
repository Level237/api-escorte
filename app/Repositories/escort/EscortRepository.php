<?php

namespace App\Repositories\Escort;

use App\Interfaces\Escorts\EscortInterface;
use App\Models\Escort;
use Illuminate\Support\Facades\DB;

class EscortRepository implements EscortInterface 
{
    public function getAllEscorts() 
    {
        return Escort::all();
    }

    public function getEscortById($EscortId) 
    {
        return Escort::findOrFail($EscortId);
    }

    public function deleteEscort($EscortId) 
    {
        Escort::destroy($EscortId);
    }

    public function updateEscort($EscortId, array $newDetails) 
    {
        return Escort::whereId($EscortId)->update($newDetails);
    }

    public function getEscortsWithTownName()
    {
        $data = DB::table('Escorts')
         ->join('towns', 'towns.id', '=','Escorts.town_id')
                            ->select('town_id','town_name', DB::raw('count(*) as totalAnnounces'))
                            ->groupBy('town_name')
                            ->orderBy('totalAnnounces', 'DESC')
                            ->get();

         //loop over the collection and fake the number of Escort by town
        $data->map(function($element){
            $element->totalAnnounces = $element->totalAnnounces*30 +  ceil($element->totalAnnounces*12/11);
            return $element;

        });
        return $data;
                            
    }

  
}
