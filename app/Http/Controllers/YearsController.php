<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameData;
use App\LoserData;
use App\Level;
use App\Option;
use App\Team;
use App\PointData;
use App\Win;



class YearsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       return view('years.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        {
            //Group A
            $data = GameData::select('year')->distinct()->get();
           
            
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
            $homeonesdwins= GameData::select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'D')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
            $homeonedlosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'D')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();
    
            //Round 1 E
            $homeonesewins=GameData::select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'E')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
            $homeoneelosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'E')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();
            
            //Round 1 F
            $homeonesfwins= GameData::select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'F')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
            $homeoneflosers = LoserData::select('team')->where('round', 'One')->where('ar', $id)->where('stage', 'R16')->where('stageSeries', 'F')->where('seriesGame', '>=', '4')->where('elimination', '1')->where('loss', '1')->get();
    
            //Round 1 G
            $homeonesgwins=GameData::select('team')->where('round', 'One')->where('year', $id)->where('stage', 'R16')->where('stageSeries', 'G')->where('seriesGame', '>=', '4')->where('elimination', '1')->get();
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
    
    
            $winners = LoserData::select()->where('ar', $id)->where('round', 'final')->where('elimination', '1')->where('win',1)->distinct()->get();
            $losers = LoserData::select('team')->where('round', 'final')->where('ar', $id)->where('loss', '1')->where('elimination', '1')->where('seriesGame', '>=', '4')->distinct()->orderBy('team', 'asc')->get();
            
            $wins = GameData::select('team')->where('homeWin', '1')->where('year', $id)->distinct()->orderBy('team', 'asc')->get();
            $homeRecord = GameData::findOrFail($id)->where('awayWin', '1')->where('year', $id)->where('team', '06 France')->count();
            
            
            
            
                           
            
            
            //group stages
    
            $groupatotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'A')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->get()->all();
            $groupbtotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'B')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
            $groupctotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'C')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
            $groupdtotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'D')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
            $groupetotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'E')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
            $groupftotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'F')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
            $groupgtotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'G')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
            $grouphtotwins= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('ar, (ar) as year')->where('stage', 'group')->where('stageSeries', 'H')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
             
            
            $grouphhomescores= PointData::selectRaw('team, sum((win)+(loss)+ (tie)) as pointTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->selectRaw('team, sum(homeScore) as homeScoreTotal')->selectRaw('team, sum(awayScore) as awayScoreTotal')->where('stage', 'group')->where('stageSeries', 'H')->where('ar', $id)->groupBy('team')->orderBy('pointTotal', 'desc')->distinct()->get()->all();
            // $grouphawayscores= LoserData::selectRaw('team, sum(win) as winTotal')->selectRaw('team, sum(loss) as lossTotal')->selectRaw('team, sum(tie) as tieTotal')->where('stage', 'group')->where('stageSeries', 'H')->where('ar', $id)->groupBy('team')->orderBy('winTotal', 'desc')->distinct()->get()->all();
     
          
    
    
            $headtoheads=LoserData::select('team')->where('loss', '1')
            ->where('win', '1')->where('stage', 'group')->where('stageSeries', 'A')->where('ar', $id)->get();
    
    
           $groupas = GameData::select('team')->where('stage', 'group')->where('stageSeries', 'A')->where('year', $id)->distinct()->get();
            $groupbs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'B')->where('ar', $id)->distinct()->get();
            $groupcs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'c')->where('ar', $id)->distinct()->get();
            $groupds = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'd')->where('ar', $id)->distinct()->get();
            $groupes = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'e')->where('ar', $id)->distinct()->get()->all();
            $groupfs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'f')->where('ar', $id)->distinct()->get()->all();
            $groupgs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'g')->where('ar', $id)->distinct()->get()->all();
            $grouphs = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'h')->where('ar', $id)->distinct()->get()->all();
            
            $groupawins = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'A')->where('ar', $id)->where('win', '1')->take('2')->orderBy('win')->get();
            $groupbwins = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'B')->where('ar', $id)->where('win', '1')->take('2')->orderBy('win')->get();
            $groupcwins = LoserData::select('team')->where('stage', 'group')->where('stageSeries', 'C')->where('ar', $id)->where('win', '1')->take('2')->orderBy('win')->get();
            
            //challenge stages winners
    
            $challengeawins = LoserData::select('homeScore')->where('stage', 'challenge')->where('stageSeries', 'A')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengebwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'B')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengecwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'C')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengedwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'D')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengeewins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'E')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengefwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'F')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengegwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'G')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengehwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'H')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengezwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'I')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengejwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'J')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengekwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'K')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengelwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'L')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengemwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'M')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengenwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'N')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengeowins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'O')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            $challengepwins = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'P')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
            
    
    
    
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
            $challengelosejs = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'J')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
            $challengeloseks = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'K')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
            $challengelosels = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'L')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
            $challengelosems = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'M')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
            $challengelosens = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'N')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
            $challengeloseos = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'O')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
            $challengeloseps = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'P')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
            
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
            $challengejwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'J')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
            $challengekwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'K')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
            $challengelwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'L')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
            $challengemwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'M')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
            $challengenwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'N')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
            $challengeowinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'O')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
            $challengepwinthrees = LoserData::select('team')->where('stage', 'challenge')->where('stageSeries', 'P')->where('ar', $id)->where('elimination', '1')->where('win', '1')->where('seriesGame', '3')->distinct()->get()->all();
            
           //playin winners
           $playinawins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'A')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinbwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'B')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playincwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'C')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playindwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'D')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinewins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'E')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinfwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'F')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playingwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'G')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinhwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'H')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playiniwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'I')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinjwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'J')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinkwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'K')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinlwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'L')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinmwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'M')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinnwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'N')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinowins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'O')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           $playinpwins = LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'P')->where('ar', $id)->where('elimination', '1')->where('win', '1')->distinct()->get()->all();
           
    
           //playin losers
           $playinalosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'A')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinblosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'B')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinclosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'C')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playindlosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'D')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinelosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'E')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinflosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'F')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinglosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'G')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinhlosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'H')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinilosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'I')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinjlosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'J')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinklosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'K')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinllosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'L')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinmlosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'M')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinnlosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'N')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinolosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'O')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
           $playinplosers=  LoserData::select('team')->where('stage', 'play-in')->where('stageSeries', 'P')->where('ar', $id)->where('elimination', '1')->where('loss', '1')->distinct()->get()->all();
    
     
           
    
           //Bubble Winners
        
    
            $gamedatas = GameData::findOrFail($id);
    
     
            // return view('games/showyear', compact('record', 'gamedatas'));
        
    
            return view('games/showyear', compact( 'challengejwins', 'headtoheads', 'grouphhomescores', 'grouphawayscores','groupbtotwins', 'groupctotwins', 'groupdtotwins', 'groupetotwins', 'groupftotwins', 'groupgtotwins', 'grouphtotwins', 'groupbtotwins' , 'groupatotwins', 'groupawins' , 'groupatotlosses', 'groupbwins', 'groupcwins' ,'challengeawinhscores','playinelosers', 'playinilosers', 'playinklosers','playinnlosers','playinolosers', 'playinplosers', 'playinmlosers', 'playinllosers', 'playinjlosers', 'playinglosers', 'playinhlosers','playinclosers', 'playindlosers', 'playinflosers', 'playinblosers', 'playinalosers', 'playinlwins', 'playinnwins', 'playinpwins', 'playinowins', 'playinmwins', 'playinbwins', 'playincwins', 'playindwins', 'playinewins', 'playinhwins', 'playiniwins', 'playinjwins', 'playinkwins', 'playinfwins', 'playingwins', 'playinalosers', 'playinawins', 'challengejwinthrees', 'challengelwinthrees', 'challengemwinthrees', 'challengepwinthrees', 'challengenwinthrees', 'challengeowinthrees', 'challengelwinthrees', 'challengekwinthrees',  'challengeiwinthrees', 'challengehwinthrees', 'challengefwinthrees', 'challengeewinthrees', 'challengegwinthrees', 'challengeowins', 'challengeloseps', 'challengepwins', 'challengenwins', 'challengeloseos', 'challengelosens', 'challengemwins', 'challengelosems', 'challengelosels', 'challengekwins', 'challengelwins','grouphs', 'groupgs', 'challengekwins', 'challengeloseks', 'challengelosejs', 'challengeawins', 'challengeawinthrees', 'challengedwinthrees', 'challengecwinthrees', 'challengebwinthrees', 'challengeloseis', 'challengezwins', 'challengehwins', 'challengelosehs', 'challengeewins', 'challengefwins', 'challengegwins', 'challengedwins', 'challengecwins', 'challengelosees',  'challengelosebs', 'challengelosefs', 'challengelosegs', 'challengelosecs', 'challengeloseds','challengeloseas', 'challengebwins', 'gamedatas', 'hometwodwins', 'homethreebwinners', '$homeoneelosers', 'hometwocwins', 'hometwobwins', 'homeonesdwins', 'homeonesawins', 'wins', 'homeRecord', 'winners', 'losers', 'homeones', 'homeonealosers', 'homeonesbwins', 'homeoneblosers', 'homeonescwins', 'homeoneclosers', 'homeonedlosers', 'homeonesfwins', 'homeoneflosers', 'homeonesgwins', 'homeoneglosers', 'homeoneshwins', 'homeonehlosers', 'homeonesewins', 'hometwoawins', 'homethreeawinners', 'groupas', 'groupbs', 'groupcs', 'groupds', 'groupes', 'groupfs'));
      
        }    
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

    public function getDisplay($id)
    {
        //
        $data = GameData::find($id);

        return view('years/display')->withData($years);
    }

}
