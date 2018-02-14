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
        
        return view('datatable');
    }

    public function getPosts()
    {
        return \DataTables::of(GameData::query())->make(true);
    }

    public function yearview()
    {
  
    }
}
