@extends('layouts.admin')


@section('content')

<h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminGamesController@store']) !!}

        <div class="form-group">
            {!! Form::label('year', 'Year:') !!}
            {!! Form::text('year', null, ['class'=>'form-control']) !!}
        </div>
            {{ csrf_field() }}
       
            <div class="form-group">
            {!! Form::label('game', 'Game:') !!}
            {!! Form::text('game', null, ['class'=>'form-control']) !!}
        </div>
            {{ csrf_field() }}

               <div class="form-group">
            {!! Form::label('team', 'Team:') !!}
            {!! Form::text('team', null, ['class'=>'form-control']) !!}
        </div>
            {{ csrf_field() }}
        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@include('includes.form-error')



    @stop