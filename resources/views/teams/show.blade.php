@extends('layouts.create')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
        @if($teamDatas)
        @foreach($teamDatas as $teamData)
            <h1> Welcome the {{$teamData->team}} profile page</h1>
     
          @endforeach
          @endif
          <h3>Overall Record:  {{$totalwins}}-{{$totalLosses}}-{{$totalTies}}</h3>
          <h3>Home Record: {{$totalhomewins}}-{{$totalHomeLosses}}-{{$totalHomeTies}}</h3>
          <h3>  Away Record: {{$totalAwayWins}}-{{$totalAwayLosses}}-{{$totalAwayTies}}</h3>

          <table class="table table-bordered">
  <thead>
    <tr>
    <th>Overall Breakdown</th>
    @if($years)
    @foreach($years as $year)
  
      <th scope="col">{{$year}}</th>
      @endforeach
      @endif
      
      <th scope="col" >Total Record</th>
      <th scope="col" class="table-secondary">Bubble Round</th>
      <th scope="col">Play-In Round</th>
      <th scope="col">Challenge Round</th>
      <th scope="col">Group Stage</th>
      <th scope="col">Round 1</th>
      <th scope="col">Round 2</th>
      <th scope="col">Conference Finals</th>
      <th scope="col">Finals</th>
      <th scope="col">Cup Hoists</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">Cup Hoists</th>
       @if($id === '75 Sabres')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '06 France')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '02 Red Wings')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '88 Capitals')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '87 Oilers')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '52 Red Wings')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '88 Capitals')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '02 Red Wings')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '72 Bruins')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '72 Bruins')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '82 Islanders')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif
     @if($id === '81 North Stars')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td>Nope</td>
     @endif

      
     
      
     
   
        
    </tr>
    <tr>
    <th scope="row">Finals Appearances</th>
    
   
@if(isset($seasonFinalWins) && isset($seasonFinalLosses))
@foreach($seasonFinalWins as $key => $sfn)
<td>{{$sfn}}-{{$seasonFinalLosses[$key]}}</td>
@endforeach
@endif

  


   
    </tr>
    <tr>
    <th scope="row">Semi Appearances</th>
    
    @if(isset($semiFinalWins) && isset($semiFinalLosses))
@foreach($semiFinalWins as $key => $sfn)
<td>{{$sfn}}-{{$semiFinalLosses[$key]}}</td>
@endforeach
@endif
      
    </tr>
    <tr>
      <th scope="row">Round 2</th>
      @if(isset($roundTwoWins) && isset($roundTwoLosses))
@foreach($roundTwoWins as $key => $sfn)
<td>{{$sfn}}-{{$roundTwoLosses[$key]}}</td>
@endforeach
@endif
    
    </tr>
    <tr>
      <th scope="row">Round One</th>
     
     
      @if(isset($roundOneWins) && isset($roundOneLosses))
@foreach($roundOneWins as $key => $sfn)
<td>{{$sfn}}-{{$roundOneLosses[$key]}}</td>
@endforeach
@endif
    
    </tr>
    <tr>
      <th scope="row">Group Stage Record</th>
      @if([isset($homeGroupWins) && isset($homeGroupLosses) && isset($homeGroupTies)])
@foreach($homeGroupWins as $key => $sfn)
<td>{{$sfn}}-{{$homeGroupLosses[$key]}}-{{$homeGroupTies[$key]}}</td>
@endforeach
@endif
     
      <td></td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2011</th>
      <td colspan="2"></td>
      <td></td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2012</th>
      <td colspan="2"></td>
    
      <td></td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2013</th>
      <td colspan="2"></td>
      
      <td></td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2014</th>
      <td></td>
      <td></td>
      
      <td></td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2015</th>
      <td></td>
      <td></td>
      <td></td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2016</th>
      <td></td>
      <td></td>
      <td></td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


 
@if($totalRecords)
@foreach ($totalRecords as $totalRecord)
{{$totalRecord}}
@endforeach
@endif


</div>

  
        </div>
    </div>
</div>



@stop