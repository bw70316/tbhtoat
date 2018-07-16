@extends('layouts.create')



@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <div class="panel panel-default"style="margin-top:20px;">
  <div class="panel-body" >
      @if($teamDatas)
        @foreach($teamDatas as $teamData)
            <h1> Welcome the {{$teamData->team}} profile page</h1>
     
        @endforeach
      @endif
            <h3>Overall Record:  {{$totalwins}}-{{$totalLosses}}-{{$totalTies}}</h3>
            <h3>Home Record: {{$totalhomewins}}-{{$totalHomeLosses}}-{{$totalHomeTies}}</h3>
            <h3>  Away Record: {{$totalAwayWins}}-{{$totalAwayLosses}}-{{$totalAwayTies}}</h3></div>
</div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
          <table class="table table-bordered">
  <thead>
    <tr>
    <th>Overall Breakdown</th>
    @if($years)
    @foreach($years as $year)
  
      <th scope="col">{{$year}}</th>
      @endforeach
      @endif
      
 
    </tr>
  </thead>
  <tbody>
    <tr>
    
    <th scope="row">Final Ranking</th>
      @if($yearFinishes)
      
@foreach($yearFinishes as $finalRank)
<td>{{$finalRank}}</td>
@endforeach
@endif
 
      
  
    </tr>
    <tr>
     
    <th scope="row">Cup Hoists</th>
       @if($id === '75 Sabres')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '06 France')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '02 Red Wings')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '88 Capitals')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '87 Oilers')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '52 Red Wings')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '88 Capitals')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '02 Red Wings')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '72 Bruins')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '72 Bruins')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '82 Islanders')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif
     @if($id === '81 North Stars')
     <td><img src="http://images.performgroup.com/di/library/sporting_news/f4/81/stanleycup052915-getty-ftrjpg_1doukux73ytug1ktxxw2qjqk5h.jpg?t=-1602556659&w=960&quality=70" alt="" style="width:50px; height:50px;"></td>
     @else<td></td>
     @endif

      
     
      
     
   
        
    </tr>
    <tr>
    <th scope="row">Finals Appearances</th>
    
   @if(isset($seasonFinalWins)===0) 
   <td>dfasdf</td>
@elseif(isset($seasonFinalWins) && isset($seasonFinalLosses))
@foreach($seasonFinalWins as $key => $sfn)
@if($sfn== "0" && $seasonFinalLosses[$key]=="0")
<td></td>
@else
<td>{{$sfn}}-{{$seasonFinalLosses[$key]}}</td>
@endif
@endforeach
@endif

  


   
    </tr>
    <tr>
    <th scope="row">Semi Appearances</th>
   
  
    @if(isset($semiFinalWins) && isset($semiFinalLosses))
@foreach($semiFinalWins as $key => $sfn)
@if($sfn == "0" && $semiFinalLosses[$key] == "0")
<td>blank</td>
@else
<td>{{$sfn}}-{{$semiFinalLosses[$key]}}</td>
@endif
@endforeach
@endif


      
    </tr>
    <tr>
      <th scope="row">Round 2</th>

      @if(isset($roundTwoWins) && isset($roundTwoLosses))
@foreach($roundTwoWins as $key => $sfn)
@if($sfn == "0" && $roundTwoLosses[$key] == "0")
<td></td>
@else
<td>{{$sfn}}-{{$roundTwoLosses[$key]}}</td>
@endif
@endforeach
@endif
    
    </tr>
    <tr>
      <th scope="row">Round One</th>
     
     
      @if(isset($roundOneWins) && isset($roundOneLosses))
@foreach($roundOneWins as $key => $sfn)
@if($sfn == "0" && $roundOneLosses[$key] == "0")
<td></td>
@else
<td>{{$sfn}}-{{$roundOneLosses[$key]}}</td>
@endif
@endforeach
@endif
    
    </tr>
    <tr>
      <th scope="row">Group Stage Record</th>
      @if([isset($homeGroupWins) && isset($homeGroupLosses) && isset($homeGroupTies)])
@foreach($homeGroupWins as $key => $sfn)
@if($sfn == "0" && $homeGroupLosses[$key] == "0" && $homeGroupTies[$key] == "0")
<td></td>
@else
<td>{{$sfn}}-{{$homeGroupLosses[$key]}}-{{$homeGroupTies[$key]}}</td>
@endif
@endforeach
@endif
     
   
    </tr>
    <tr>
      
      <th scope="row">Group Stage Record</th>
      @if([isset($homeChallengeWins) && isset($homeChallengeLosses) && isset($homeChallengeTies)])
@foreach($homeChallengeWins as $key => $sfn)
@if($sfn == "0" && $homeChallengeLosses[$key] == "0" && $homeChallengeTies[$key] == "0")
<td></td>
@else
<td>{{$sfn}}-{{$homeChallengeLosses[$key]}}-{{$homeChallengeTies[$key]}}</td>
@endif
@endforeach
@endif
      
    </tr>
    <tr>
      <th scope="row">Play In Record</th>
      @if([isset($homePlayInWins) && isset($homePlayInLosses) && isset($homePlayInTies)])
@foreach($homePlayInWins as $key => $sfn)
@if($sfn == "0" && $homePlayInLosses[$key] == "0" && $homePlayInTies[$key] == "0")
<td></td>
@else
<td>{{$sfn}}-{{$homePlayInLosses[$key]}}-{{$homePlayInTies[$key]}}</td>
@endif
@endforeach
@endif
    
   
    </tr>
    <tr>
    <th scope="row">Bubble</th>
      @if([isset($homeBubbleWins) && isset($homeBubbleLosses) && isset($homeBubbleTies)])
@foreach($homeBubbleWins as $key => $sfn)
@if($sfn == "0" && $homeBubbleLosses[$key] == "0" && $homeBubbleTies[$key] == "0")
<td></td>
@else
<td>{{$sfn}}-{{$homeBubbleLosses[$key]}}-{{$homeBubbleTies[$key]}}</td>
@endif
@endforeach
@endif
    
      
  
    </tr>
    <tr>


 


  </tbody>
</table>
</div>


 



  
        </div>
    </div>




@stop