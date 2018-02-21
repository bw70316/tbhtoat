@extends('layouts.create')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1> Welcome to Game # {{$gamedatas->id}}</h1>
            <section> 
            <h3>Year: {{$gamedatas->year}}</h3>
            <h3>Away Team: {{$gamedatas->awayTeam}}</h3>
            <h3>Home Team: {{$gamedatas->homeTeam}}</h3>
          
            @if ($gamedatas->homeScore != '') 
            <h3>Home Score: {{$gamedatas->homeScore}}</h3>
            @endif

            @if ($gamedatas->awayScore != '') 
            <h3>Away Score: {{$gamedatas->awayScore}}</h3>
            @endif
             
            @if ($gamedatas->homeWin === '1') 
            <h3 style="color:blue;">Home Win: BIG WINNER!</h3>
            @endif

            @if ($gamedatas->awayWin === '1') 
            <h3 style="color: red;">Away Win: BIG WINNER!</h3>
            @endif
           
            @if ($gamedatas->tie === '1') 
            <h3>Tie: Oh a Tie, how exciting!</h3>
            @endIf

             @if ($gamedatas->homeShots != '') 
            <h3>Home Shots: {{$gamedatas->homeShots}}</h3>
            @endIf

             @if ($gamedatas->awayShots != '') 
            <h3>Away Shots: {{$gamedatas->awayShots}}</h3>
            @endif

            @if ($gamedatas->stage != '') 
            <h3>Stage: {{$gamedatas->stage}}</h3>
            @endif

             @if ($gamedatas->round != '') 
            <h3>Round: {{$gamedatas->round}}</h3>
            @endif

             @if ($gamedatas->stageSeries != '') 
            <h3>Stage Series: {{$gamedatas->stageSeries}}</h3>
            @endif
            
            @if ($gamedatas->ot != '') 
            <h3>OT: OVERTIME!</h3>
            @endif

             @if ($gamedatas->ottwo != '') 
            <h3>OT2: DOUBLE OVERTIME!!</h3>
            @endif

             @if ($gamedatas->otthree != '') 
            <h3>OT3: TRIPLE OVERTIME!!</h3>
            @endif

             @if ($gamedatas->elimination != '') 
            <h3>Elimintation: YES!</h3>
            @endif

             @if ($gamedatas->forfeiture != '') 
            <h3>Forfeiture: YOU FORFEITED??? </h3>
            @endif

            
            @if ($gamedatas->groupGame != '') 
            <h3>Group Game: {{$gamedatas->groupGame}} </h3>
            @endif

             @if ($gamedatas->awayGroupSeed != '') 
            <h3>Away Group Seed:{{$gamedatas->awayGroupSeed}} </h3>
            @endif

           

             @if ($gamedatas->homeGroupSeed != '') 
            <h3>Home Group Seed:{{$gamedatas->homeGroupSeed}} </h3>
            @endif

              @if ($gamedatas->awayBubbleSeed != '') 
            <h3>Away Bubble Seed:{{$gamedatas->awayBubbleSeed}} </h3>
            @endif

             @if ($gamedatas->homeBubbleSeed != '') 
            <h3>Home Bubble Seed:{{$gamedatas->homeBubbleSeed}} </h3>
            @endif



            


         
            </section>




        </div>
    </div>
</div>



@stop
