@extends('layouts.create')




@section('content')

    <div class="col-sm-6">
    <h1>Posts</h1>


    <div class="table-responsive text-center">
			<table class="table" id="table">
        <thead>
          <tr>
            <th class="text-center">Game #</th>
            <th class="text-center">Year</th>
            <th class="text-center">Team</th>
            <th class="text-center">Win</th>
            <th class="text-center">Loss</th>
            <th class="text-center">Tie</th>
            <th class="text-center">Stage</th>
              <th class="text-center">Round</th>
              <th class="text-center">Stage Series</th>
              <th class="text-center">Series Game</th>
              <th class="text-center">Away Team</th>
              <th class="text-center">Home Team</th>
              <th class="text-center">Away Win</th>
              <th class="text-center">Away Loss</th>
              <th class="text-center">Home Win</th>
              <th class="text-center">Home Loss</th>
          </tr>
        </thead>
        <tbody>

        @if($gamedatas)

            @foreach($gamedatas as $gamedata)
          <tr>
            <td>{{$gamedata->ar}}</td>
              

          @endforeach
          @endif
        </tbody>
      </table>
      {{$gamedatas->render()}}
      </div>
    </div>

    

<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
    @stop