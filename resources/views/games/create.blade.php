@extends('layouts.create')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h1>Add Game Data Below</h1>

            {!! Form::open(['method'=>'POST', 'action'=>'GamesController@store']) !!}
            <div class="form-group" id="year">
                {!! Form::label('year', 'Year:') !!}
                {!! Form::text('year', null, ['class'=>'form-control']) !!}
            </div>
            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('level_id', 'Series:') !!}
                {!! Form::select('level_id',[''=>'Choose Categories'] + $levels, null, ['class'=>'form-control']) !!}
            </div>
            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('win_id', 'Winner?') !!}
                {!! Form::select('win_id',[''=>'Choose Categories'] + $wins, null, ['class'=>'form-control']) !!}
            </div>
            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('team_id', 'Home Team:') !!}
                {!! Form::select('team_id', [''=>'Choose Home Team'] + $teams, null, ['class'=>'form-control']) !!}
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('option_id', 'Away Team:') !!}
                {!! Form::select('option_id', [''=>'Choose Away Team'] + $options, null, ['class'=>'form-control']) !!}
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('homeScore', 'Home Score:') !!}
                {!! Form::text('homeScore', null, ['class'=>'form-control']) !!}
            </div>
            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('awayScore', 'Away Score:') !!}
                {!! Form::text('awayScore', null, ['class'=>'form-control']) !!}
            </div>
            {{ csrf_field() }}

            <div class="form-group">
                {!! Form::label('homeShots', 'Home Shots:') !!}
                {!! Form::text('homeShots', null, ['class'=>'form-control']) !!}
            </div>
                {{ csrf_field() }} {{--"csrf_field" allows the input to persist to the model without error...not really explained just works--}}
            <div class="form-group">
                {!! Form::label('awayShots', 'Away Shots:') !!}
                {!! Form::text('awayShots', null, ['class'=>'form-control']) !!}
            </div>
                {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('overtime_id', 'Overtime?') !!}
                {!! Form::select('overtime_id', array(0=>'No OT',1=>'1', 2=>'2', 3=>'3'), null, ['class'=>'form-control']) !!}
            </div>
            <div>
                <label for="tie">   Tie Game?</label> <br>
                      <input type="radio" name="tie" value="No" checked="checked"> No
                     <input type="radio" name="tie" value="Yes"> Yes
                <br><br>
            </div>


         <div class="form-group">
            {!! Form::submit('Add Game', ['class'=>'btn btn-primary']) !!}
         </div>

             {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection