@extends('layouts.create')


@section('content')

    <div class="container">
         <div class="row">
             <div class="col-sm-8">
                <h1>Users</h1>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Game #</th>
                        <th>User</th>
                        <th>W?</th>
                        <th>Year Played</th>
                        <th>Series</th>
                        <th>H-Team</th>
                        <th>A-Team</th>
                        <th>H-Score</th>
                        <th>A-Score</th>
                        <th>Home Shots</th>
                        <th>Away Shots</th>
                        <th>Tie?</th>
                        <th>OT?</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($games)

                        @foreach($games as $game)

                            <tr>
                                <td>{{$game->id}}</td>
                                <td>{{$game->user->name}}</td>
                                <td>{{$game->win ? $game->win->name : 'non'}}</td>
                                <td>{{$game->year}}</td>
                                <td>{{$game->level ? $game->level->name : 'No Series'}}</td>
                                <td>{{$game->team ? $game->team->name : 'N/A'}}</td>
                                <td>{{$game->option ? $game->option->name : 'N/A'}}</td>
                                <td>{{$game->homeScore}}</td>
                                <td>{{$game->awayScore}}</td>
                                <td>{{$game->homeShots}}</td>
                                <td>{{$game->awayShots}}</td>
                                <td>{{$game->tie}}</td>
                                <td>{{$game->overtime_id}}</td>
                            </tr>
                        @endforeach
                    @endif


                    </tbody>
                </table>
                 <a href="{{ url('/games/create') }}" class="btn btn-primary">Add Game</a>
                 <div class="row">
                     <div class="col-sm-6 col-sm-offset-5">
                         {{$games->render()}}
                     </div>
                 </div>
             </div>
        </div>
    </div>
@stop