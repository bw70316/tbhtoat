<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\GamesCreateRequest;
use App\Level;
use App\Option;
use App\Team;
use App\GameData;
use App\Win;
use App\LoserData;
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

    public function __construct(){

        
    }




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

    public function showyear($id)
    {
        //Group A
       
        
        //Round 1 A
        $homeonesawins = GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'A')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();                                               
        $homeonealosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'A')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get(); 
       
        //Round 1 B
        $homeonesbwins= GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'B')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();  
        $homeoneblosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'B')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();     
        
        //Round 1 C
        $homeonescwins= GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'C')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
        $homeoneclosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'C')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();

        //Round 1 D
        $homeonesdwins= GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'D')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
        $homeonedlosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'D')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();

        //Round 1 E
        $homeonesewins=GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'E')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
        $homeoneelosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'E')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();
        
        //Round 1 F
        $homeonesfwins= GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'F')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
        $homeoneflosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'F')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();

        //Round 1 G
        $homeonesgwins=GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'G')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
        $homeoneglosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'G')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();

        //Round 1 H
        $homeoneshwins=GameData::findOrFail($id)->select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'H')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
        $homeonehlosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'H')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();

        //Round 2 I
        $hometwoawins= GameData::findOrFail($id)->select('team')->where('round', 'Two')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'I')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
        
        //Round 2 J
        $hometwobwins= GameData::findOrFail($id)->select('team')->where('round', 'Two')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'J')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();

        //Round 2 K
        $hometwocwins= GameData::findOrFail($id)->select('team')->where('round', 'Two')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'K')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();

        //Round 2 L

        $hometwodwins= GameData::findOrFail($id)->select('team')->where('round', 'Two')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'L')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
       
       //Round 3 M/N

      
       $homethreeawinners = GameData::findOrFail($id)->select('team')->where('round', 'SemiFinal')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'M')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
       $homethreebwinners = GameData::findOrFail($id)->select('team')->where('round', 'SemiFinal')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'N')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();


        $winners = GameData::findOrFail($id)->select('team')->where('round', 'final')->where('year', $id)->where('elimination', '1')->distinct()->orderBy('team', 'asc')->get();
        $losers = LoserData::select('team')->where('round', 'final')->where('ar', $id)->where('loss', '1')->where('elimination', '1')->where('seriesGame', '>=', '4')->distinct()->orderBy('team', 'asc')->get();
        
        $wins = GameData::select('team')->where('homeWin', '1')->where('year', $id)->distinct()->orderBy('team', 'asc')->get();
        $homeRecord = GameData::findOrFail($id)->where('awayWin', '1')->where('year', $id)->where('team', '06 France')->count();
        
        //group stages

        $groupas = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'A')->where('ar', $id)->distinct()->get()->all();
        $groupbs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'B')->where('ar', $id)->distinct()->get()->all();
        $groupcs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'c')->where('ar', $id)->distinct()->get()->all();
        $groupds = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'd')->where('ar', $id)->distinct()->get()->all();
        $groupes = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'e')->where('ar', $id)->distinct()->get()->all();
        $groupfs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'f')->where('ar', $id)->distinct()->get()->all();
        
        //challenge stages winners

        $challengeawins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'A')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengebwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'B')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengecwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'C')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengedwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'D')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengeewins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'E')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengefwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'F')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengegwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'G')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengehwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'H')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengeiwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'I')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
        $challengebwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'B')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
       



        //challenge stage bums
        $challengeloseas = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'A')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengelosebs = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'B')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengelosecs = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'C')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengeloseds = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'D')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengelosees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'E')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengelosefs = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'F')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengelosegs = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'G')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengelosehs = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'H')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        $challengeloseis = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'I')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
        
        //challenge stage three game series

        $challengeawinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'A')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengebwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'B')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengecwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'C')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengedwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'D')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengeewinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'E')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengefwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'F')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengegwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'G')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengehwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'H')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        $challengeiwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'I')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
        
       

        $gamedatas = GameData::findOrFail($id);

 
        // return view('games/showyear', compact('record', 'gamedatas'));
    

        return view('games/showyear', compact('challengeawins', 'challengeawinthrees', 'challengedwinthrees', 'challengecwinthrees', 'challengebwinthrees', 'challengeloseis', 'challengeiwins', 'challengehwins', 'challengelosehs', 'challengeewins', 'challengefwins', 'challengegwins', 'challengedwins', 'challengecwins', 'challengelosees',  'challengelosebs', 'challengelosefs', 'challengelosegs', 'challengelosecs', 'challengeloseds','challengeloseas', 'challengebwins', 'gamedatas', 'hometwodwins', 'homethreebwinners', '$homeoneelosers', 'hometwocwins', 'hometwobwins', 'homeonesdwins', 'homeonesawins', 'wins', 'homeRecord', 'winners', 'losers', 'homeones', 'homeonealosers', 'homeonesbwins', 'homeoneblosers', 'homeonescwins', 'homeoneclosers', 'homeonedlosers', 'homeonesfwins', 'homeoneflosers', 'homeonesgwins', 'homeoneglosers', 'homeoneshwins', 'homeonehlosers', 'homeonesewins', 'hometwoawins', 'homethreeawinners', 'groupas', 'groupbs', 'groupcs', 'groupds', 'groupes', 'groupfs'));
    }
}
