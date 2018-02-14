<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\GamesCreateRequest;
use App\Level;
use App\Option;
use App\Team;
use App\GameData;
use App\Win;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::paginate(2);

        return view('games.index', compact('games'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        $wins = Win::pluck('name', 'id')->all();
        $teams = Team::pluck('name', 'id')->all();
        $levels = Level::pluck('name', 'id')->all();
        $options = Option::pluck('name', 'id')->all();



        return view('games.create', compact('wins', 'teams','levels', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GamesCreateRequest $request)
    {
        //
        $input = $request->all();



        $user = Auth::user();

        // View
        $user->games()->create($input);



       return redirect('/games');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $gamedatas = GameData::findOrFail($id);

        return view('games/show', compact('gamedatas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
