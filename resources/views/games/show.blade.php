@extends('layouts.create')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1> Welcome to Game # {{$gamedatas->id}}</h1>
            <section> 
            <h3>Game: {{$gamedatas->game}}</h3>
            <h3>Year: {{$gamedatas->year}}</h3>
            <h3>Away Team: {{$gamedatas->awayTeam}}</h3>
            <h3>Home Team: {{$gamedatas->homeTeam}}</h3>
            @if ($gamedatas->homeScore === '4') 
            HEllo cookabura
            @endif

            
            <h3>Home Score: {{$gamedatas->homeScore}}</h3>
            <h3>Away Score: {{$gamedatas->awayScore}}</h3>
         

            
            <h3>Home Win: {{$gamedatas->homeWin}}</h3>
            <h3>Away Win: {{$gamedatas->awayWin}}</h3>
            <h3>Tie: {{$gamedatas->tie}}</h3>
            <h3>Stage: {{$gamedatas->stage}}</h3>
            <h3>Round: {{$gamedatas->round}}</h3>
            <h3>Stage Series: {{$gamedatas->stageSeries}}</h3>
            
            <h3>
            </section>




        </div>
    </div>
</div>



@stop
