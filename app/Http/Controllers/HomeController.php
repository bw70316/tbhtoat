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

    
        
        //$seasonOneAwayWins= GameData::where('awayTeam', '81-North Stars')->where('awayWin', '1')->where('year', '2016')->count(); 
        
        // $champions = Laravel_Hockey::table('rank_datas')
//             ->groupBy('year_column_name')
//             ->having('ranking_column_name', '=', 1)
//             ->get();

        // $seasonOneWins= $seasonOneHomeWins + $seasonOneAwayWins;
        //the withData allows me to include the $data variable in my blade
        //I tried it without it and it didn't work. 
        return view ('front/home', compact("data", "rankTwos","rankOnes", "seasonTwelves", "seasonTwoWins", "seasonTwoLosses", "seasonTwoTies", "seasonElevens", "seasonTens", "seasonSixes",   "seasonSevens","seasonNines","seasonEights", "seasonOneWins","seasonOneLosses", "seasonOneTies", "teams", "ranks", "seasonTwos", "seasonOnes", "seasonThrees", "seasonFours", "seasonFives"));



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
