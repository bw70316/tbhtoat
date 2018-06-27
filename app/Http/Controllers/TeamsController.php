<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameData;
use App\Team;
use App\Losers;
use App\LoserData;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return 'hello';
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

    
    public function showteam($team)
    {
        $teams = GameData::findOrFail($team)->select('team')->where('round', 'One')->where('team', $team)->where('stage', 'R16')->where('year', '2005')->get();
    }

    public function display($teamdatas)
    {
        function createYearsArray()
{
    // Logic of the function

     return [
         2005, 
         2006,
         2007,
         2008,
         2009,
         2010,
         2011,
         2012,
         2013,
         2014,
        2015,
        2016,
        
     ];
     }

        $years = createYearsArray();

        $roundoneyearoned = GameData::where('awayteam', $teamdatas)
     ->where('awayLoss', '1')
     ->where('stage', 'R16')
     ->where('round', 'one')
     ->whereIn('year', $years)->count();
        //Overall Records
       
        $totalhomewins= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->count();
        $totalawaywins=GameData::where('awayTeam', $teamdatas)->where('awayWin', '1')->count();
        $totalwins= $totalhomewins + $totalawaywins;
       
        $totalhomelosses=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->count();
        $totalawaylosses=gameData::where('awayTeam', $teamdatas)->where('awayLoss', '1')->count();

        $totallosses= $totalhomelosses+ $totalawaylosses;

        //Bubble Round 2014

        $bubbleyearonea= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->where('stage', 'bubble')->where('year', '2014')->count();
        $bubbleyearoneb=GameData::where('homeTeam', $teamdatas)->where('homeLoss', '1')->where('stage', 'bubble')->where('year', '2014')->count();
        $bubbleyearone= $bubbleyearonea + $bubbleyearoneb;

        $bubbleyearonec= GameData::where('awayTeam', $teamdatas)->where('awayWin', '1')->where('stage', 'bubble')->where('year', '2014')->count();
        $bubbleyearoned=GameData::where('awayTeam', $teamdatas)->where('awayLoss', '1')->where('stage', 'bubble')->where('year', '2014')->count();
        $bubbleyearoneloss= $bubbleyearonec + $bubbleyearoned;

        $bubbleonetiea= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('stage', 'bubble')->where('year', '2014')->count(); 
            $bubbleonetieb= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('stage', 'bubble')->where('year', '2014')->count(); 
         $bubbleonetie= $bubbleonetiea + $bubbleonetieb;

        //Bubble Round 2015

        $bubbleyeartwoa= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->where('stage', 'bubble')->where('year', '2014')->count();
        $bubbleyeartwob=GameData::where('homeTeam', $teamdatas)->where('homeLoss', '1')->where('stage', 'bubble')->where('year', '2014')->count();
        $bubbleyeartwo= $bubbleyeartwoa + $bubbleyeartwob;

        $bubbleyeartwoc= GameData::where('awayTeam', $teamdatas)->where('awayWin', '1')->where('stage', 'bubble')->where('year', '2015')->count();
        $bubbleyeartwod=GameData::where('awayTeam', $teamdatas)->where('awayLoss', '1')->where('stage', 'bubble')->where('year', '2015')->count();
        $bubbleyeartwoloss= $bubbleyeartwoc + $bubbleyeartwod;

        $bubbletwotiea= GameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('stage', 'bubble')->where('year', '2015')->count(); 
        $bubbletwotieb= GameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('stage', 'bubble')->where('year', '2015')->count(); 
     $bubbletwotie= $bubbletwotiea + $bubbletwotieb;

     //Bubble Round 2016

     $bubbleyearthreea= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->where('stage', 'bubble')->where('year', '2016')->count();
     $bubbleyearthreeb=GameData::where('homeTeam', $teamdatas)->where('homeLoss', '1')->where('stage', 'bubble')->where('year', '2016')->count();
     $bubbleyearthree= $bubbleyearthreea + $bubbleyearthreeb;

     $bubbleyearthreec= GameData::where('awayTeam', $teamdatas)->where('awayWin', '1')->where('stage', 'bubble')->where('year', '2016')->count();
     $bubbleyearthreed=GameData::where('awayTeam', $teamdatas)->where('awayLoss', '1')->where('stage', 'bubble')->where('year', '2016')->count();
     $bubbleyearthreeloss= $bubbleyearthreec + $bubbleyearthreed;

     $bubblethreetiea= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2016')->count(); 
     $bubblethreetieb= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2016')->count(); 
  $bubblethreetie= $bubbletwotiea + $bubbletwotieb;
       
        

        //Year 2005 First Rounds
        // $roundoneyearonea= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->where('stage', 'R16')->where('round', 'one')->where('year', '2005')->count();
        // $roundoneyearoneb= GameData::where('awayteam', $teamdatas)->where('awayWin', '1')->where('stage', 'R16')->where('round', 'one')->where('year', '2005')->count();
        // $roundoneyearone= $roundoneyearonea + $roundoneyearoneb;

        // $roundoneyearonec= GameData::where('homeTeam', $teamdatas)->where('homeLoss', '1')->where('stage', 'R16')->where('round', 'one')->where('year', '2005')->count();
        // $roundoneyearoned= GameData::where('awayteam', $teamdatas)->where('awayLoss', '1')->where('stage', 'R16')->where('round', 'one')->where('year', '2005')->count();
        // $roundoneyearoneloss= $roundoneyearonec + $roundoneyearoned;

        //Year 2005 Second Rounds

        $roundtwoyearonea= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->where('stage', 'R16')->where('round', 'two')->where('year', '2005')->count();
        $roundtwoyearoneb= GameData::where('awayteam', $teamdatas)->where('awayWin', '1')->where('stage', 'R16')->where('round', 'two')->where('year', '2005')->count();
        $roundtwoyearone= $roundtwoyearonea + $roundtwoyearoneb;

        $roundtwoyearonec= GameData::where('homeTeam', $teamdatas)->where('homeLoss', '1')->where('stage', 'R16')->where('round', 'two')->where('year', '2005')->count();
        $roundtwoyearoned= GameData::where('awayteam', $teamdatas)->where('awayLoss', '1')->where('stage', 'R16')->where('round', 'two')->where('year', '2005')->count();
        $roundtwoyearoneloss= $roundtwoyearonec + $roundtwoyearoned;

        //Year 2005 Semi-Finals

        $roundsemiyearonea= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->where('stage', 'R16')->where('round', 'semiFinal')->where('year', '2005')->count();
        $roundsemiyearoneb= GameData::where('awayteam', $teamdatas)->where('awayWin', '1')->where('stage', 'R16')->where('round', 'semiFinal')->where('year', '2005')->count();
        $roundsemiyearone= $roundsemiyearonea + $roundsemiyearoneb;

        $roundsemiyearonec= GameData::where('homeTeam', $teamdatas)->where('homeLoss', '1')->where('stage', 'R16')->where('round', 'SemiFinal')->where('year', '2005')->count();
        $roundsemiyearoned= GameData::where('awayteam', $teamdatas)->where('awayLoss', '1')->where('stage', 'R16')->where('round', 'semiFinal')->where('year', '2005')->count();
        $roundsemiyearoneloss= $roundsemiyearonec + $roundsemiyearoned;

        //Year 2005 Finals

        $roundfinalyearonea= GameData::where('homeTeam', $teamdatas)->where('homeWin', '1')->where('stage', 'R16')->where('round', 'final')->where('year', '2005')->count();
        $roundfinalyearoneb= GameData::where('awayteam', $teamdatas)->where('awayWin', '1')->where('stage', 'R16')->where('round', 'final')->where('year', '2005')->count();
        $roundfinalyearone= $roundfinalyearonea + $roundfinalyearoneb;

        $roundfinalyearonec= GameData::where('homeTeam', $teamdatas)->where('homeLoss', '1')->where('stage', 'R16')->where('round', 'final')->where('year', '2005')->count();
        $roundfinalyearoned= GameData::where('awayteam', $teamdatas)->where('awayLoss', '1')->where('stage', 'R16')->where('round', 'final')->where('year', '2005')->count();
        $roundfinalyearoneloss= $roundfinalyearonec + $roundfinalyearoned;

        // Champions

        $yearonechampions= LoserData::select('opponent')->where('win', '1')->where('stage', 'R16')->where('round', 'final')->where('elimination', '1')->where('ar', '2005')->get();
        $yeartwochampion= GameData::select('team')->where('win', '1')->where('stage', 'R16')->where('round', 'final')->where('elimination', '1')->where('year', '2006')->count();
        
        






        //Records by Year 2005

        $yearonehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2005')->count(); 
        $yearoneawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2005')->count(); 
        $yearonetotalwins= $yearonehomewin + $yearoneawaywin;

        $yearonehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2005')->count(); 
        $yearoneawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2005')->count(); 
        $yearonetotalloss= $yearonehomeloss + $yearoneawayloss;

         //Records by Year 2006

         $yeartwohomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2006')->count(); 
         $yeartwoawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2006')->count(); 
         $yeartwototalwins= $yeartwohomewin + $yeartwoawaywin;
 
         $yeartwohomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2006')->count(); 
         $yeartwoawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2006')->count(); 
         $yeartwototalloss= $yeartwohomeloss + $yeartwoawayloss;

         
         $yeartwoawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2006')->count(); 
            $yeartwohometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2006')->count(); 
         $yeartwotie= $yeartwoawaytie + $yeartwohometie;

         //Records by Year 2007

         $yearthreehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2007')->count(); 
         $yearthreeawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2007')->count(); 
         $yearthreetotalwins= $yearthreehomewin + $yearthreeawaywin;
 
         $yearthreehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2007')->count(); 
         $yearthreeawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2007')->count(); 
         $yearthreetotalloss= $yearthreehomeloss + $yearthreeawayloss;

         $yearthreeawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2007')->count(); 
         $yearthreehometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2007')->count(); 
      $yearthreetie= $yearthreeawaytie + $yearthreehometie;

        //Records by Year 2008

        $yearfourhomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2008')->count(); 
        $yearfourawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2008')->count(); 
        $yearfourtotalwins= $yearfourhomewin + $yearfourawaywin;


        $yearfourhomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2008')->count(); 
        $yearfourawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2008')->count(); 
        $yearfourtotalloss= $yearfourhomeloss + $yearfourawayloss;

        $yearfourawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2007')->count(); 
        $yearfourhometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2007')->count(); 
     $yearfourtie= $yearfourawaytie + $yearfourhometie;
        
            //Total Records by Year 2009

            $yearfivehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2009')->count(); 
            $yearfiveawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2009')->count(); 
            $yearfivetotalwins= $yearfivehomewin + $yearfiveawaywin;

            
    
    
            $yearfivehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2009')->count(); 
            $yearfiveawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2009')->count(); 
           
            $yearfiveawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2009')->count(); 
            $yearfivehometie= gameData::where('homeTeam', $teamdatas)->where('awayTie', '1')->where('year', '2009')->count(); 
           
            $yearfivetotalloss= $yearfivehomeloss + $yearfiveawayloss;
            $yearfivetie= $yearfiveawaytie + $yearfivehometie;

            //2009 Play-In

            $yearfivebubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2009')->count(); 
            $yearfivebubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2009')->count(); 
            $yearfivewinbubble= $yearfivebubblehomewin+$yearfivebubbleawaywin;

            $yearfivebubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2009')->count(); 
            $yearfivebubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2009')->count(); 
            $yearfivewinbubbleloss= $yearfivebubblehomeloss+$yearfivebubbleawayloss;


                //Records by Year 2010

        $yearsixhomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2010')->count(); 
        $yearsixawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2010')->count(); 
        
        
        $yearsixtotalwins= $yearsixhomewin + $yearsixawaywin;
       


        $yearsixhomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2010')->count(); 
        $yearsixawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2010')->count(); 
        $yearsixtotalloss= $yearsixhomeloss + $yearsixawayloss;

        $yearsixawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2010')->count(); 
        $yearsixhometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2010')->count(); 
     $yearsixtie= $yearsixawaytie + $yearsixhometie;

       //2010 Play-In

       $yearsixbubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2010')->count(); 
       $yearsixbubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2010')->count(); 
       $yearsixwinbubble= $yearsixbubblehomewin+$yearsixbubbleawaywin;

       $yearsixbubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2010')->count(); 
       $yearsixbubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2010')->count(); 
       $yearsixwinbubbleloss= $yearsixbubblehomeloss+$yearsixbubbleawayloss;


     //Total Records by Year 2011

     $yearsevenhomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2011')->count(); 
     $yearsevenawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2011')->count(); 
     
     
     $yearseventotalwins= $yearsevenhomewin + $yearsevenawaywin;
    


     $yearsevenhomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2011')->count(); 
     $yearsevenawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2011')->count(); 
     $yearseventotalloss= $yearsevenhomeloss + $yearsevenawayloss;

     $yearsevenawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2011')->count(); 
     $yearsevenhometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2011')->count(); 
  $yearseventie= $yearsevenawaytie + $yearsevenhometie;


        //2011 Play-In

        $yearsevenbubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2011')->count(); 
        $yearsevenbubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2011')->count(); 
        $yearsevenwinbubble= $yearsevenbubblehomewin+$yearsevenbubbleawaywin;
 
        $yearsevenbubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2011')->count(); 
        $yearsevenbubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2011')->count(); 
        $yearsevenwinbubbleloss= $yearsevenbubblehomeloss+$yearsevenbubbleawayloss;

   //Records by Year 2011

   $yearsevenhomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2011')->count(); 
   $yearsevenawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2011')->count(); 
   
   
   $yearseventotalwins= $yearsevenhomewin + $yearsevenawaywin;
  


   $yearsevenhomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2011')->count(); 
   $yearsevenawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2011')->count(); 
   $yearseventotalloss= $yearsevenhomeloss + $yearsevenawayloss;

   $yearsevenawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2011')->count(); 
   $yearsevenhometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2011')->count(); 
$yearseventie= $yearsevenawaytie + $yearsevenhometie; 

//Records by Year 2012

$yeareighthomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2012')->count(); 
$yeareightawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2012')->count(); 


$yeareighttotalwins= $yeareighthomewin + $yeareightawaywin;



$yeareighthomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2012')->count(); 
$yeareightawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2012')->count(); 
$yeareighttotalloss= $yeareighthomeloss + $yeareightawayloss;

$yeareightawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2012')->count(); 
$yeareighthometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2012')->count(); 
$yeareighttie= $yeareightawaytie + $yeareighthometie;

  //2012 Play-In

  $yeareightbubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2012')->count(); 
  $yeareightbubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2012')->count(); 
  $yeareightwinbubble= $yeareightbubblehomewin+$yeareightbubbleawaywin;

  $yeareightbubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2012')->count(); 
  $yeareightbubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2012')->count(); 
  $yeareightwinbubbleloss= $yeareightbubblehomeloss+$yeareightbubbleawayloss;

//Records by Year 2013

$yearninehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2013')->count(); 
$yearnineawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2013')->count(); 


$yearninetotalwins= $yeareighthomewin + $yeareightawaywin;



$yearninehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2013')->count(); 
$yearnineawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2013')->count(); 
$yearninetotalloss= $yearninehomeloss + $yearnineawayloss;



$yearnineawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2013')->count(); 
$yearninehometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2013')->count(); 
$yearninetie= $yearnineawaytie + $yearninehometie;

//Play-In By Year 2013

$yearninebubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2013')->count(); 
  $yearninebubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2013')->count(); 
  $yearninewinbubble= $yearninebubblehomewin+$yearninebubbleawaywin;

  $yearninebubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2013')->count(); 
  $yearninebubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2013')->count(); 
  $yearninewinbubbleloss= $yearninebubblehomeloss+$yearninebubbleawayloss;



//Year 2014

$yeartenhomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2014')->count(); 
$yeartenawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2014')->count(); 


$yeartentotalwins= $yeartenhomewin + $yeartenawaywin;



$yeartenhomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2014')->count(); 
$yeartenawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2014')->count(); 
$yeartentotalloss= $yeartenhomeloss + $yeartenawayloss;

$yeartenawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2014')->count(); 
$yeartenhometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2014')->count(); 
$yeartentie= $yeartenawaytie + $yeartenhometie;

//Play-In Year 14

$yeartenbubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2014')->count(); 
  $yeartenbubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2014')->count(); 
  $yeartenwinbubble= $yeartenbubblehomewin+$yeartenbubbleawaywin;

  $yeartenbubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2014')->count(); 
  $yeartenbubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2014')->count(); 
  $yeartenwinbubbleloss= $yeartenbubblehomeloss+$yeartenbubbleawayloss;


//Year 2015

$yearelevenhomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2015')->count(); 
$yearelevenawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2015')->count(); 


$yeareleventotalwins= $yearelevenhomewin + $yearelevenawaywin;



$yearelevenhomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2015')->count(); 
$yearelevenawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2015')->count(); 
$yeareleventotalloss= $yearelevenhomeloss + $yearelevenawayloss;

$yearelevenawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2015')->count(); 
$yearelevenhometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2015')->count(); 
$yeareleventie= $yearelevenawaytie + $yearelevenhometie;

//Play-in 15

$yearelevenbubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2015')->count(); 
  $yearelevenbubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2015')->count(); 
  $yearelevenwinbubble= $yearelevenbubblehomewin+$yearelevenbubbleawaywin;

  $yearelevenbubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2015')->count(); 
  $yearelevenbubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2015')->count(); 
  $yearelevenwinbubbleloss= $yearelevenbubblehomeloss+$yearelevenbubbleawayloss;

//Record 2016

$yeartwelvehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('year', '2016')->count(); 
$yeartwelveawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('year', '2016')->count(); 


$yeartwelvetotalwins= $yeartwelvehomewin + $yeartwelveawaywin;



$yeartwelvehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('year', '2015')->count(); 
$yeartwelveawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('year', '2015')->count(); 
$yeartwelvetotalloss= $yeartwelvehomeloss + $yeartwelveawayloss;

$yeartwelveawaytie= gameData::where('awayTeam', $teamdatas)->where('awayTie', '1')->where('year', '2015')->count(); 
$yeartwelvehometie= gameData::where('homeTeam', $teamdatas)->where('homeTie', '1')->where('year', '2015')->count(); 
$yeartwelvetie= $yeartwelveawaytie + $yeartwelvehometie;

//Play-in 2016


$yeartwelvebubblehomewin=gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'play-in')->where('year', '2016')->count(); 
  $yeartwelvebubbleawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'play-in')->where('year', '2016')->count(); 
  $yeartwelvewinbubble= $yeartwelvebubblehomewin+$yeartwelvebubbleawaywin;

  $yeartwelvebubblehomeloss=gameData::where('homeTeam', $teamdatas)->where('homeloss', '1')->where('stage', 'play-in')->where('year', '2016')->count(); 
  $yeartwelvebubbleawayloss= gameData::where('awayTeam', $teamdatas)->where('awayloss', '1')->where('stage', 'play-in')->where('year', '2016')->count(); 
  $yeartwelvewinbubbleloss= $yeartwelvebubblehomeloss+$yeartwelvebubbleawayloss;


    $grouparecordhomewin= gameData::where('homeTeam', $teamdatas)->where('homewin', '1')->where('stage', 'group')->where('stageSeries', 'A')->where('year', '2006')->count();
    $grouparecordawaywin= gameData::where('awayTeam', $teamdatas)->where('awaywin', '1')->where('stage', 'group')->where('stageSeries', 'A')->where('year', '2006')->count();
    


        return view('teams/display', compact('teamdatas', 'roundoneyearoned', 'yeartwelvewinbubble', 'yeartwelvewinbubbleloss', 'yearelevenwinbubble', 'yearelevenwinbubbleloss', 'yeareightwinbubbleloss' , 'yeartenwinbubble', 'yeartenwinbubbleloss', 'yearninewinbubbleloss', 'yearninewinbubble', 'yeareightwinbubble', 'yearsevenwinbubbleloss', 'yearsevenwinbubble', 'yearsixwinbubble', 'yearsixwinbubbleloss', 'yearfivewinbubbleloss',  'yearfivewinbubble', 'bubblehomewins', 'bubbleonetie', 'bubbletwotie', 'bubbleyeartwo', 'bubbleyearthree', 'bubbleyearthreeloss', 'bubblethreetie', 'bubbleyeartwoloss', 'bubbleyearone', 'bubbleyearoneloss', 'yearonechampions', 'yeartwochampion', 'roundfinalyearoneloss', 'roundfinalyearone', 'roundsemiyearoneloss', 'roundsemiyearone', 'roundtwoyearone', 'roundtwoyearoneloss',  'roundoneyearoneloss', 'roundoneyearone' ,'yeartwelvetotalloss', 'yeartwelvetotalwins', 'yeartwelvetie', 'yeareleventotalwins', 'yeareleventotalloss', 'yeartentotalwins', 'yeartentotalloss','yearninetotalwins', 'yearninetotalloss', 'yeareighttie', 'yearninetie', 'yeartentie', 'yeareleventie', 'yeareighttotalwins', 'yeareighttotalloss', 'yearseventotalwins', 'yearseventotalloss', 'yearseventie', 'yearfivetie', 'yearsixtie', 'yearthreetie', 'yearfourtie' , 'yeartwotie', 'yearsixhometie', 'yearsixtotalwins', 'yearsixtotalloss', 'yearthreetotalwins', 'yearthreetotalloss', 'yearfivetotalwins', 'yearfivetotalloss', 'yearonetotalwins', 'yearonetotalloss',  'yeartwototalwins', 'yeartwototalloss', 'yearfourhomewin', 'yearfourawaywin', 'yearfourtotalwins', 'yearfourhomeloss', 'yearfourawayloss', 'yearfourtotalloss', 'totallosses', 'totalhomelosses', 'totalawaylosses', 'totalhomewins', 'totalwins', 'totalawaywins'));

    }
}
