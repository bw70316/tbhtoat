@extends('layouts.create')

@section('content')



    <div class="col-sm-6">
        <h1>Add Player Data Below</h1>

        {!! Form::open(['method'=>'POST', 'action'=>'PlayersController@store']) !!}
        <div class="form-group">
            {!! Form::label('option_id', 'Team:') !!}
            {!! Form::select('option_id', [''=>'Choose Team'] + $options, null, ['class'=>'form-control']) !!}
        </div>
        {{ csrf_field() }}

        <div class="form-group">
            {!! Form::label('position_id', 'Position:') !!}
            {!! Form::select('position_id', [''=>'Choose Position'] + $positions, null, ['class'=>'form-control']) !!}
        </div>
        {{ csrf_field() }}


        <div class="form-group">
            {!! Form::label('name_id', 'Player Name:') !!}
            {!! Form::select('name_id', [''=>'Choose Player'] + $names, null, ['class'=>'form-control']) !!}
        </div>
        {{ csrf_field() }}

        <div class="form-group" style="width:60px">
            {!! Form::label('goals_scored', 'Goals:') !!}
            {!! Form::text('goals_scored', null, ['class'=>'form-control']) !!}
        </div>


        <label for="gw_Goal">Gw_Goal?</label>
        <input type="radio" name="gw_goal" value="Yes"> Yes
        <input type="radio" name="gw_goal" value="No" checked="checked"> No
    <br><br>


        {{ csrf_field() }}
        <div class="form-group" style="width:60px">
            {!! Form::label('assists', 'Assists:') !!}
            {!! Form::text('assists', null, ['class'=>'form-control']) !!}
        </div>
        {{ csrf_field() }}

        <div class="form-group" style="width:60px">
            {!! Form::label('saves', 'Saves:') !!}
            {!! Form::text('saves', null, ['class'=>'form-control']) !!}
        </div>

        {{ csrf_field() }}




        <div class="form-group">
            {!! Form::submit('Add Player', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection