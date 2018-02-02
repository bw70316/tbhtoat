@extends('layouts.create')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Users</h1>

                <table class="table">
                    <thead>
                    <tr>

                        <th>Form Filler</th>
                        <th>Player</th>
                        <th>Position</th>
                        <th>Team</th>
                        <th>GW Goal?</th>
                        <th>Goals</th>
                        <th>Assists</th>
                        <th>Saves</th>
                        <th>View/Edit</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if($players)

                        @foreach($players as $player)

                            <tr>

                                <td>{{$player->user->name}}</td>
                                <td>{{$player->name ? $player->name->name : 'N/A'}}</td>
                                <td>{{$player->position ? $player->position->name : 'N/A'}}</td>
                                <td>{{$player->option ? $player->option->name : 'N/A'}}</td>
                                <td>{{$player->gw_goal}}</td>
                                <td>{{$player->goals_scored}}</td>
                                <td>{{$player->assists}}</td>
                                <td>{{$player->saves}}</td>
                                <td><a href="{{url('/players/show')}}" class="btn-btn-success">View Player</button></a></td>


                            </tr>
                        @endforeach
                    @endif


                    </tbody>
                </table>
                <a href="{{ url('/players/create') }}" class="btn btn-primary">Add Player</a>

                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">
                        {{$players->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop