<?php

namespace App\Http\Controllers\Api\Search;
use Spatie\Searchable\Search;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Town;
use App\Models\Quarter;
use App\Models\Announcement;

class ResearchController extends Controller
{
    public function search($term){

      $searchResults = (new Search())
        ->registerModel(Announcement::class, 'title')
        ->search($term);

       return response($searchResults, 200)
                  ->header('Content-Type', 'application/json');
    }

   
}
