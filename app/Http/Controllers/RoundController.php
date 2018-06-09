<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoundController extends Controller
{
    //

    public function display($rounddatas) {

        return view('rounds/display', compact('rounddatas'));
    }
}
