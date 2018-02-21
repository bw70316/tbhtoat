@extends('layouts.create')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1> Welcome the {{$teamdatas->homeTeam}} profile page</h1>
          
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Overall Record: {{$teamdatas->id}}</h2></div>
                    <div class="panel-body">This is the break down for that team</div>
            </div>

     {{$teams}}

        </div>
    </div>
</div>



@stop