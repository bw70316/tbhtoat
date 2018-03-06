
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
      <td>{{$yearonetotalwins}}-{{$yearonetotalloss}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>{{$roundoneyearone}}-{{$roundoneyearoneloss}}</td>
      <td>{{$roundtwoyearone}}-{{$roundtwoyearoneloss}}</td>
      <td>{{$roundsemiyearone}}-{{$roundsemiyearoneloss}}</td>

      @if(($roundfinalyearone && $roundfinalyearoneloss) == 0)
      <td></td>
     
        @else
       
   
        <td>{{$roundfinalyearone}}-{{$roundfinalyearoneloss}}</td>
      @endif

        @if(($roundfinalyearone && $roundfinalyearoneloss) == 0)
        <td></td>
        @else
      <td><img src="data:image/jpeg;base64,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" alt="Quack-Quack-Quack"></td>
      @endif
    </tr>
    <tr>
      <th scope="row">2006</th>
      @if($yeartwotie == 0)
      <td>{{$yeartwototalwins}}-{{$yeartwototalloss}}</td>
      @else
     
      <td>{{$yeartwototalwins}}-{{$yeartwototalloss}}-{{$yeartwotie}}</td>
      @endif
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">2007</th>
      <td>{{$yearthreetotalwins}}-{{$yearthreetotalloss}}-{{$yearthreetie}}</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2008</th>
      <td>{{$yearfourtotalwins}}-{{$yearfourtotalloss}}-{{$yearfourtie}}</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2009</th>
      <td>{{$yearfivetotalwins}}-{{$yearfivetotalloss}}-{{$yearfivetie}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2010</th>
      <td>{{$yearsixtotalwins}}-{{$yearsixtotalloss}}-{{$yearsixtie}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2011</th>
      <td>{{$yearseventotalwins}}-{{$yearseventotalloss}}-{{$yearseventie}}</td>
      <td>Otto</td>
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
      <td>{{$yeareighttotalwins}}-{{$yeareighttotalloss}}-{{$yeareighttie}}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">2013</th>
      <td>{{$yearninetotalwins}}-{{$yearninetotalloss}}-{{$yearninetie}}</td>
      <td>Otto</td>
      <td>@mdo</td>
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
      <td>Otto</td>
      <td>@mdo</td>
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
      <td>Otto</td>
      <td>@mdo</td>
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
      <td>Otto</td>
      <td>@mdo</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

  

</div>

@stop