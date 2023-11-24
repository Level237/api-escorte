<?php

namespace App\Http\Controllers\Api\Search;
use Spatie\Searchable\Search;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Escort;
use App\Models\Town;
use App\Models\Quarter;
use App\Models\Announcement;

class ResearchController extends Controller
{
    public function search($term){

      $searchResults = (new Search())
        ->registerModel(Escort::class, 'escort_name', 'sexuality')
        ->registerModel(Town::class, 'town_name')
        ->registerModel(Quarter::class, 'quarter_name')
         ->registerModel(Announcement::class, 'title')
        ->search($term);

       return response($searchResults, 200)
                  ->header('Content-Type', 'application/json');
    }

   
}
