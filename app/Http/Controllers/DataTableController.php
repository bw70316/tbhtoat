<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use DataTables;
use App\User;
use App\GameData;

class DataTableController extends Controller
{    
    public function datatable()
    {
        //select needs a parameter(that took me a while) and "->distinct" skips duplicates...so using this
        //for years, allows me to get 2005, 2006, all years once (this took me a longer while)

        $data = GameData::select('year')->distinct()->get();
        $teams = GameData::select('team')->distinct()->orderBy('team', 'asc')->get();
    
   
        //the withData allows me to include the $data variable in my blade
        //I tried it without it and it didn't work. 
        return view("datatable", compact("data", "teams"));

    }

    public function getPosts()
    {

        //This is using my web routes.. It is used as my ajax call.. going here would get you my json (see Web.php)
        return \DataTables::of(GameData::query())->make(true);
    }

    public function yearview()
    {
  
    }
}
