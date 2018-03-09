
@extends('layouts.create')



@section('content')

<div class="col-sm-8">

    <h1>Welcome to the {{$teamdatas}} Team Page</h1>

        <!-- <p>It's been a long and arduous journey for {{$teamdatas}}. There were a lot of highs and lows, a lot of joy and tears, scandals and celebrations. But through it all they perservered, sticking together as a team, and isn't that what Hollywood movies have taught us to be the most important thing of all? With that said, below is a breakdown of the {{$teamdatas}} legacy...  -->

    <h3>Overall Record:  {{$totalwins}}-{{$totallosses}}</h3>
     <h3>Home Record: {{$totalhomewins}}-  {{$totalhomelosses}}</h3>
      <h3>  Away Record: {{$totalawaywins}}-{{$totalawaylosses}}</h3>

      
        
      @foreach($yearonechampions as $yearonechampion)
                            @if($yearonechampion->team == $teamdatas)

                            <p>{{$yearonechampion->team}} Won the 2005 championships</p>
                            @else 
                            <p>this team did not win in 2005<p/>
                             @endif
                        @endforeach
                      

                      
 

      

   <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Historical Performance</th>
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
      <th scope="row">2005</th>
      <td   colspan="2">{{$yearonetotalwins}}-{{$yearonetotalloss}}</td>
      
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     

      
      @if(($roundtwoyearone || $roundtwoyearoneloss) == 0)

<td></td>

@else
      <td>{{$roundtwoyearone}}-{{$roundtwoyearoneloss}}</td>

@endif
      @if(($roundsemiyearone && $roundsemiyearoneloss) == 0)

       <td></td>
     
     @else
      <td>{{$roundsemiyearone}}-{{$roundsemiyearoneloss}}</td>
      @endif

      @if(($roundfinalyearone && $roundfinalyearoneloss) == 0)
      <td></td>
     
        @else
       
   
        <td>{{$roundfinalyearone}}-{{$roundfinalyearoneloss}}</td>
      @endif

        @if(($roundfinalyearone && $roundfinalyearoneloss) == 0) 
        <td></td>
        @elseif($roundfinalyearone < $roundfinalyearoneloss )
        <td></td>
        @else
      <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRANp5Wrm045B9mLcT8QIw5kFV8YP7XcgKkIuwOZ5fKBQ7654dI" alt="Quack-Quack-Quack"></td>
      @endif
    </tr>
    <tr>
      <th scope="row">2006</th>
    
     
      <td colspan="2">{{$yeartwototalwins}}-{{$yeartwototalloss}}-{{$yeartwotie}}</td>
     
      
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2007</th>
      <td  <td colspan="2">{{$yearthreetotalwins}}-{{$yearthreetotalloss}}-{{$yearthreetie}}</td>
      
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2008</th>
      <td colspan="2">{{$yearfourtotalwins}}-{{$yearfourtotalloss}}-{{$yearfourtie}}</td>
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
      <th scope="row">2009</th>
      <td colspan="2">{{$yearfivetotalwins}}-{{$yearfivetotalloss}}-{{$yearfivetie}}</td>
     
      <td>{{ $yearfivewinbubble}}-{{$yearfivewinbubbleloss}}</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2010</th>
      <td colspan="2">{{$yearsixtotalwins}}-{{$yearsixtotalloss}}-{{$yearsixtie}}</td>
     
      <td>{{ $yearsixwinbubble}}-{{$yearsixwinbubbleloss}}</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2011</th>
      <td colspan="2">{{$yearseventotalwins}}-{{$yearseventotalloss}}-{{$yearseventie}}</td>
      <td>{{ $yearsevenwinbubble}}-{{$yearsevenwinbubbleloss}}</td>
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
      <td colspan="2">{{$yeareighttotalwins}}-{{$yeareighttotalloss}}-{{$yeareighttie}}</td>
    
      <td>{{ $yeareightwinbubble}}-{{$yeareightwinbubbleloss}}</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2013</th>
      <td colspan="2">{{$yearninetotalwins}}-{{$yearninetotalloss}}-{{$yearninetie}}</td>
      
      <td>{{ $yearninewinbubble}}-{{$yearninewinbubbleloss}}</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2014</th>
      <td>{{$yeartentotalwins}}-{{$yeartentotalloss}}-{{$yeartentie}}</td>
      <td>{{$bubbleyearone}}-{{$bubbleyearoneloss}}-{{$bubbleonetie}}</td>
      
      <td>{{ $yeartenwinbubble}}-{{$yeartenwinbubbleloss}}</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2015</th>
      <td>{{$yeareleventotalwins}}-{{$yeareleventotalloss}}-{{$yeareleventie}}</td>
      <td>{{$bubbleyeartwo}}-{{$bubbleyeartwoloss}}-{{$bubbletwotie}}</td>
      <td>{{ $yearelevenwinbubble}}-{{$yearelevenwinbubbleloss}}</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2016</th>
      <td>{{$yeartwelvetotalwins}}-{{$yeartwelvetotalloss}}-{{$yeartwelvetie}}</td>
      <td>{{$bubbleyearthree}}-{{$bubbleyearthreeloss}}-{{$bubblethreetie}}</td>
      <td>{{ $yeartwelvewinbubble}}-{{$yeartwelvewinbubbleloss}}</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


{{$roundoneyearoned}} 



</div>

@stop