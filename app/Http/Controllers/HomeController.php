<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\GameData;
use App\TeamRank;
use App\LoserData;
use App\AllRank;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $data = GameData::select('year')->distinct()->get();
        $teams = GameData::select('team')->distinct()->orderBy('team', 'asc')->get();

        $rankOnes= AllRank::select('team')->take(10)->orderBy('ranking', 'asc')->get();
        $rankTwos= AllRank::select('team')->take(53)->skip(12)->orderBy('ranking', 'asc')->get();
    
        $ranks= TeamRank::select('am')->distinct()->orderBy('am', 'asc')->get();
        $seasonOnes= TeamRank::select('am')->where('2016', 1)->get();
        $seasonTwos= TeamRank::select('am')->where('2015', 1)->get();
        $seasonThrees= TeamRank::select('am')->where('2014', 1)->get();
        $seasonFours= TeamRank::select('am')->where('2013', 1)->get();
        $seasonFives= TeamRank::select('am')->where('2012', 1)->get();
        $seasonSixes= TeamRank::select('am')->where('2011', 1)->get();
        $seasonSevens= TeamRank::select('am')->where('2010', 1)->get();
        $seasonEights= TeamRank::select('am')->where('2009', 1)->get();
         $seasonNines= TeamRank::select('am')->where('2008', 1)->get();
         $seasonTens= TeamRank::select('am')->where('2007', 1)->get();
         $seasonElevens= TeamRank::select('am')->where('2006', 1)->get();
     
        $seasonTwelves= TeamRank::select('am')->where('2005', 1)->get();
       

        $seasonOneWins=LoserData::where('team', '81-North Stars')->where('Win', '1')->where('ar', 2016)->count(); 
        $seasonOneLosses=LoserData::where('team', '81-North Stars')->where('Loss', '1')->where('ar', 2016)->count();
        $seasonOneTies=LoserData::where('team', '81-North Stars')->where('tie', '1')->where('ar', 2016)->count();
        $seasonTwoWins=LoserData::where('team', '82-Islanders')->where('Win', '1')->where('ar', 2015)->count(); 
        $seasonTwoLosses=LoserData::where('team', '82-Islanders')->where('Loss', '1')->where('ar', 2015)->count();
        $seasonTwoTies=LoserData::where('team', '82-Islanders')->where('tie', '1')->where('ar', 2015)->count();
        $seasonThreeWins=LoserData::where('team', '72-Bruins')->where('Win', '1')->where('ar', 2014)->count(); 
        $seasonThreeLosses=LoserData::where('team', '72-Bruins')->where('Loss', '1')->where('ar', 2014)->count();
        $seasonThreeTies=LoserData::where('team', '72-Bruins')->where('tie', '1')->where('ar', 2014)->count();
        $seasonFourWins=LoserData::where('team', '72-Bruins')->where('Win', '1')->where('ar', 2013)->count(); 
        $seasonFourLosses=LoserData::where('team', '72-Bruins')->where('Loss', '1')->where('ar', 2013)->count();
        $seasonFourTies=LoserData::where('team', '72-Bruins')->where('tie', '1')->where('ar', 2013)->count();
        $seasonFiveWins=LoserData::where('team', '02-Red Wings')->where('Win', '1')->where('ar', 2012)->count(); 
        $seasonFiveLosses=LoserData::where('team', '02-Red Wings')->where('Loss', '1')->where('ar', 2012)->count();
        $seasonFiveTies=LoserData::where('team', '02-Red Wings')->where('tie', '1')->where('ar', 2012)->count();
        $seasonSixWins=LoserData::where('team', '88-Capitals')->where('Win', '1')->where('ar', 2011)->count(); 
        $seasonSixLosses=LoserData::where('team', '88-Capitals')->where('Loss', '1')->where('ar', 2011)->count();
        $seasonSixTies=LoserData::where('team', '88-Capitals')->where('tie', '1')->where('ar', 2011)->count();
        $seasonSevenWins=LoserData::where('team', '52-Red Wings')->where('Win', '1')->where('ar', 2010)->count(); 
        $seasonSevenLosses=LoserData::where('team', '52-Red Wings')->where('Loss', '1')->where('ar', 2010)->count();
        $seasonSevenTies=LoserData::where('team', '52-Red Wings')->where('tie', '1')->where('ar', 2010)->count();
        $seasonEightWins=LoserData::where('team', '87-Oilers')->where('Win', '1')->where('ar', 2009)->count(); 
        $seasonEightLosses=LoserData::where('team', '87-Oilers')->where('Loss', '1')->where('ar', 2009)->count();
        $seasonEightTies=LoserData::where('team', '87-Oilers')->where('tie', '1')->where('ar', 2009)->count();
        $seasonNineWins=LoserData::where('team', '88-Capitals')->where('Win', '1')->where('ar', 2008)->count(); 
        $seasonNineLosses=LoserData::where('team', '88-Capitals')->where('Loss', '1')->where('ar', 2008)->count();
        $seasonNineTies=LoserData::where('team', '88-Capitals')->where('tie', '1')->where('ar', 2008)->count();
        $seasonTenWins=LoserData::where('team', '02-Red Wings')->where('Win', '1')->where('ar', 2007)->count(); 
        $seasonTenLosses=LoserData::where('team', '02-Red Wings')->where('Loss', '1')->where('ar', 2007)->count();
        $seasonTenTies=LoserData::where('team', '02-Red Wings')->where('tie', '1')->where('ar', 2007)->count();
        $seasonElevenWins=LoserData::where('team', '06-France')->where('Win', '1')->where('ar', 2006)->count(); 
        $seasonElevenLosses=LoserData::where('team', '06-France')->where('Loss', '1')->where('ar', 2006)->count();
        $seasonElevenTies=LoserData::where('team', '06-France')->where('tie', '1')->where('ar', 2006)->count();
        $seasonTwelveWins=LoserData::where('team', '75-Sabres')->where('Win', '1')->where('ar', 2005)->count(); 
        $seasonTwelveLosses=LoserData::where('team', '75-Sabres')->where('Loss', '1')->where('ar', 2005)->count();
        $seasonTwelveTies=LoserData::where('team', '75-Sabres')->where('tie', '1')->where('ar', 2005)->count();
       
        //$seasonOneAwayWins= GameData::where('awayTeam', '81-North Stars')->where('awayWin', '1')->where('year', '2016')->count(); 
        
        // $champions = Laravel_Hockey::table('rank_datas')
//             ->groupBy('year_column_name')
//             ->having('ranking_column_name', '=', 1)
//             ->get();

        // $seasonOneWins= $seasonOneHomeWins + $seasonOneAwayWins;
        //the withData allows me to include the $data variable in my blade
        //I tried it without it and it didn't work. 
  return view ('front/home', compact("data", "rankTwos","rankOnes", "seasonThreeWins", "seasonThreeLosses", "seasonThreeTies","seasonTwelveWins", "seasonTwelveLosses", "seasonTwelveTies","seasonElevenWins", "seasonElevenLosses", "seasonElevenTies", "seasonTenWins", "seasonTenLosses", "seasonTenTies", "seasonNineWins", "seasonNineLosses", "seasonNineTies", "seasonEightWins", "seasonEightLosses", "seasonEightTies", "seasonSevenWins", "seasonSevenLosses", "seasonSevenTies" ,"seasonFourWins", "seasonFourLosses", "seasonFourTies","seasonSixWins", "seasonSixLosses", "seasonSixTies", "seasonFiveWins", "seasonFiveLosses", "seasonFiveTies","seasonTwelves", "seasonTwoWins", "seasonTwoLosses", "seasonTwoTies", "seasonElevens", "seasonTens", "seasonSixes",   "seasonSevens","seasonNines","seasonEights", "seasonOneWins","seasonOneLosses", "seasonOneTies", "teams", "ranks", "seasonTwos", "seasonOnes", "seasonThrees", "seasonFours", "seasonFives"));



        // $year = Carbon::now()->year;

    // $posts = Post::paginate(2);
    // $categories = Category::all();


    //     return view('front/home', compact('posts', 'categories'));
    }

    public function post($slug){

        $post = Post::findBySlugOrFail($slug);
 
        $comments = $post->comments()->whereIsActive(1)->get();
        
        $categories = Category::all();
 
 
        return view('post', compact('post', 'comments', 'categories'));
     }
}
