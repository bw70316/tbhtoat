<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageController extends Controller
{
    //
    public function display($stagedatas) {

        return view('stages/display', compact('stagedatas'));
    }
}
