<?php

namespace App\Http\Controllers;



use App\Http\Requests\PlayersCreateRequest;
use App\Name;
use App\Option;
use App\Player;
use App\Position;
use App\Posititon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = Player::paginate(2);
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
//        $wins = Win::lists('name', 'id')->all();
//        $teams = Team::lists('name', 'id')->all();

        $names = Name::lists('name', 'id')->all();
        $options = Option::lists('name', 'id')->all();
        $positions = Position::lists('name', 'id')->all();

        return view('players.create', compact('options', 'names', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayersCreateRequest $request)
    {
        $input = $request->all();



        $user = Auth::user();

        // View
        $user->players()->create($input);





        return redirect('/players');

        //
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

        $player = Player::findOrFail($id);

        return $player;
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
