@extends('layouts.create')



@section('content')


    <div class="row">
        <div class="col-sm-9">
            
            <div class="panel panel-default" id="group_stage">
                <div class="panel-heading"><h2>{{$gamedatas->id}} Finals Breakdown</h2></div>
                    <div class="panel-body">@foreach($winners as $winner)
            @if($winner)
               <p> The Grand Champion for the year of {{$gamedatas->id}} is <strong>{{$winner->team}}</strong> (slow clap)</p>
            @endif
        @endforeach
        @foreach($losers as $loser)
            @if($loser)
               <p> The Runner Up for the year of {{$gamedatas->id}} is <strong>{{$loser->team}}</strong> (emphatic boos)</p>
            @endif
        @endforeach
        <p>Why don't we scroll down and see just how this happened....</p>
        </div>
            </div>
            @if ($gamedatas->id === 2005)

               <p></p>
@elseif($gamedatas->id === 2006)

             <button class="btn btn-primary " id="groups_button"> Groups</button>
          
            <br><br>
            
          

  


               @elseif ($gamedatas->id === 2007 or $gamedatas->id === 2008)
               <button class="btn btn-primary " id="groups_button"> Groups</button>
               
            <button class="btn btn-primary " id="challenge_button"> Challenge</button>

                 <div class="panel panel-default" id="playin_stage">
                <div class="panel-heading"><h2>NO PLAY IN GAMES IN {{$gamedatas->id}}</h2></div>
                   
                    
                    </div>
                    @else
                    <button class="btn btn-primary " id="groups_button"> Groups</button>
                    <button class="btn btn-primary " id="playin_button"> Play-In</button>
               <button class="btn btn-primary " id="challenge_button"> Challenge</button>
            
          
            <div class="panel panel-default" id="playin_stage">
                <div class="panel-heading"><h2>{{$gamedatas->id}} Playin Games</h2></div>
                    <div class="panel-body">
                    <ul id="groupa">
                      <p>A</p>
                 
                     
                     
                        @foreach($playinawins as $playinawin)
                            @if($playinawin)
                            <li id="challenge_winner"> {{$playinawin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinalosers as $playinaloser)
                            @if($playinaloser)
                            <li id="challenge_loser"> {{$playinaloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>B</p>
                 
                     
                     
                        @foreach($playinbwins as $playinbwin)
                            @if($playinbwin)
                            <li id="challenge_winner"> {{$playinbwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinblosers as $playinbloser)
                            @if($playinbloser)
                            <li id="challenge_loser"> {{$playinbloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>C</p>
                 
                     
                     
                        @foreach($playincwins as $playincwin)
                            @if($playincwin)
                            <li id="challenge_winner"> {{$playincwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinclosers as $playincloser)
                            @if($playincloser)
                            <li id="challenge_loser"> {{$playincloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>D</p>
                 
                     
                     
                        @foreach($playindwins as $playindwin)
                            @if($playindwin)
                            <li id="challenge_winner"> {{$playindwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playindlosers as $playindloser)
                            @if($playindloser)
                            <li id="challenge_loser"> {{$playindloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>E</p>
                 
                     
                     
                        @foreach($playinewins as $playinewin)
                            @if($playinewin)
                            <li id="challenge_winner"> {{$playinewin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinelosers as $playineloser)
                            @if($playineloser)
                            <li id="challenge_loser"> {{$playineloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p> F</p>
                 
                     
                     
                        @foreach($playinfwins as $playinfwin)
                            @if($playinfwin)
                            <li id="challenge_winner"> {{$playinfwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinclosers as $playinfloser)
                            @if($playinfloser)
                            <li id="challenge_loser"> {{$playinfloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>G</p>
                 
                     
                     
                        @foreach($playingwins as $playingwin)
                            @if($playingwin)
                            <li id="challenge_winner"> {{$playingwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinglosers as $playingloser)
                            @if($playingloser)
                            <li id="challenge_loser"> {{$playingloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>H</p>
                 
                     
                     
                        @foreach($playinhwins as $playinhwin)
                            @if($playinhwin)
                            <li id="challenge_winner"> {{$playinhwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinhlosers as $playinhloser)
                            @if($playinhloser)
                            <li id="challenge_loser"> {{$playinhloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>I</p>
                 
                     
                     
                        @foreach($playiniwins as $playiniwin)
                            @if($playiniwin)
                            <li id="challenge_winner"> {{$playiniwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinilosers as $playiniloser)
                            @if($playiniloser)
                            <li id="challenge_loser"> {{$playiniloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>J</p>
                 
                     
                     
                        @foreach($playinjwins as $playinjwin)
                            @if($playinjwin)
                            <li id="challenge_winner"> {{$playinjwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinjlosers as $playinjloser)
                            @if($playinjloser)
                            <li id="challenge_loser"> {{$playinjloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>K</p>
                 
                     
                     
                        @foreach($playinjwins as $playinkwin)
                            @if($playinkwin)
                            <li id="challenge_winner"> {{$playinkwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinjlosers as $playinkloser)
                            @if($playinkloser)
                            <li id="challenge_loser"> {{$playinkloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>L</p>
                 
                     
                     
                        @foreach($playinlwins as $playinlwin)
                            @if($playinlwin)
                            <li id="challenge_winner"> {{$playinlwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinllosers as $playinlloser)
                            @if($playinlloser)
                            <li id="challenge_loser"> {{$playinlloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>M</p>
                 
                     
                     
                        @foreach($playinmwins as $playinmwin)
                            @if($playinmwin)
                            <li id="challenge_winner"> {{$playinmwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinmlosers as $playinmloser)
                            @if($playinmloser)
                            <li id="challenge_loser"> {{$playinmloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>N</p>
                 
                     
                     
                        @foreach($playinmwins as $playinnwin)
                            @if($playinnwin)
                            <li id="challenge_winner"> {{$playinnwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinmlosers as $playinnloser)
                            @if($playinnloser)
                            <li id="challenge_loser"> {{$playinnloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>O</p>
                 
                     
                     
                        @foreach($playinmwins as $playinowin)
                            @if($playinowin)
                            <li id="challenge_winner"> {{$playinowin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinmlosers as $playinoloser)
                            @if($playinoloser)
                            <li id="challenge_loser"> {{$playinoloser->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>P</p>
                 
                     
                     
                        @foreach($playinmwins as $playinpwin)
                            @if($playinpwin)
                            <li id="challenge_winner"> {{$playinpwin->team}}</li>
                             @endif
                        @endforeach
                        
                        @foreach($playinmlosers as $playinploser)
                            @if($playinploser)
                            <li id="challenge_loser"> {{$playinploser->team}}</li>
                             @endif
                        @endforeach
                    </ul>

        </div>
            </div>
            @endif

       

     @if ($gamedatas->id === 2005 or $gamedatas->id === 2006)
            

            <div class="panel panel-default" id="challenge_stage">
           <div class="panel-heading"><h2>NO PLAY CHALLENGE GAMES IN {{$gamedatas->id}}</h2></div>
              
               
               </div>
               @else
       
         
<div class="panel panel-default" id="challenge_stage">
                <div class="panel-heading"><h2>{{$gamedatas->id}} Challenge Rounds</h2></div>
                    <div class="panel-body">
                    <ul id="groupa">
                      <p>A</p>
                      @if($challengeawinthrees)

@foreach($challengeawinthrees as $challengeawinthree)
                          @if($challengeawinthree)
                          <li id="challenge_three"> {{$challengeawinthree->team}}*</li>
                           @endif
                      @endforeach

                      @else 
                     
                     
                        @foreach($challengeawins as $challengeawin)
                            @if($challengeawin)
                            <li id="challenge_winner"> {{$challengeawin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengeloseas as $challengelosea)
                            @if($challengelosea)
                            <li id="challenge_loser"> {{$challengelosea->team}}</li>
                             @endif
                        @endforeach
                    </ul>

                    
                     

                    <ul id="groupa">
                      <p>B</p>

                       @if($challengebwinthrees)

@foreach($challengebwinthrees as $challengebwinthree)
                          @if($challengebwinthree)
                          <li id="challenge_three"> {{$challengebwinthree->team}}*</li>
                           @endif
                      @endforeach

                      @else 
                     
                        @foreach($challengebwins as $challengebwin)
                            @if($challengebwin)
                            <li id="challenge_winner"> {{$challengebwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengelosebs as $challengeloseb)
                            @if($challengeloseb)
                            <li id="challenge_loser"> {{$challengeloseb->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>C</p>
                      @if($challengecwinthrees)

@foreach($challengecwinthrees as $challengecwinthree)
                          @if($challengecwinthree)
                          <li id="challenge_three"> {{$challengecwinthree->team}}*</li>
                           @endif
                      @endforeach

                      @else 
                     
                        @foreach($challengecwins as $challengecwin)
                            @if($challengecwin)
                            <li id="challenge_winner"> {{$challengecwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengelosecs as $challengelosec)
                            @if($challengelosec)
                            <li id="challenge_loser"> {{$challengelosec->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>D</p>
                      @if($challengedwinthrees)

@foreach($challengedwinthrees as $challengedwinthree)
                          @if($challengedwinthree)
                          <li id="challenge_three"> {{$challengedwinthree->team}}*</li>
                           @endif
                      @endforeach

                      @else 
                        @foreach($challengedwins as $challengedwin)
                            @if($challengedwin)
                            <li id="challenge_winner"> {{$challengedwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengeloseds as $challengelosed)
                            @if($challengelosed)
                            <li id="challenge_loser"> {{$challengelosed->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>E</p>
                      @if($challengeewinthrees)

            @foreach($challengeewinthrees as $challengeewinthree)
                          @if($challengeewinthree)
                          <li id="challenge_three"> {{$challengeewinthree->team}}*</li>
                           @endif
                      @endforeach

                      @else 
                     
                        @foreach($challengeewins as $challengeewin)
                            @if($challengeewin)
                            <li id="challenge_winner"> {{$challengeewin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengelosees as $challengelosee)
                            @if($challengelosee)
                            <li id="challenge_loser"> {{$challengelosee->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>F</p>
                      @if($challengefwinthrees)

            @foreach($challengefwinthrees as $challengefwinthree)
                          @if($challengefwinthree)
                          <li id="challenge_three"> {{$challengefwinthree->team}}*</li>
                           @endif
                      @endforeach

                      @else 
                     
                        @foreach($challengefwins as $challengefwin)
                            @if($challengefwin)
                            <li id="challenge_winner"> {{$challengefwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengelosefs as $challengelosef)
                            @if($challengelosef)
                            <li id="challenge_loser"> {{$challengelosef->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>G</p>
                      @if($challengegwinthrees)

        @foreach($challengegwinthrees as $challengegwinthree)
                        @if($challengegwinthree)
                            <li id="challenge_three"> {{$challengegwinthree->team}}*</li>
                        @endif
                                @endforeach

                             @else 
                     
                        @foreach($challengegwins as $challengegwin)
                            @if($challengegwin)
                            <li id="challenge_winner"> {{$challengegwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengelosegs as $challengeloseg)
                            @if($challengeloseg)
                            <li id="challenge_loser"> {{$challengeloseg->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>H</p>
                      @if($challengehwinthrees)

        @foreach($challengehwinthrees as $challengehwinthree)
                        @if($challengehwinthree)
                            <li id="challenge_three"> {{$challengehwinthree->team}}*</li>
                        @endif
                                @endforeach

                             @else 
                     
                        @foreach($challengehwins as $challengehwin)
                            @if($challengehwin)
                            <li id="challenge_winner"> {{$challengehwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengelosehs as $challengeloseh)
                            @if($challengeloseh)
                            <li id="challenge_loser"> {{$challengeloseh->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>I</p>
                      
                      @if($challengeiwinthrees)

        @foreach($challengeiwinthrees as $challengeiwinthree)
                        @if($challengeiwinthree)
                            <li id="challenge_three"> {{$challengeiwinthree->team}}*</li>
                        @endif
                                @endforeach

                             @else 
                     
                        @foreach($challengezwins as $challengezwin)
                            @if($challengezwin)
                            <li id="challenge_winner"> {{$challengezwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengeloseis as $challengelosei)
                            @if($challengelosei)
                            <li id="challenge_loser"> {{$challengelosei->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                      <p>J</p>
                      @if($challengejwinthrees)

@foreach($challengejwinthrees as $challengejwinthree)
                @if($challengejwinthree)
                    <li id="challenge_three"> {{$challengejwinthree->team}}*</li>
                @endif
                        @endforeach

                     @else 
                     
                        @foreach($challengejwins as $challengejwin)
                            @if($challengejwin)
                            <li id="challenge_winner"> {{$challengejwin->team}}</li>
                             @endif
                        @endforeach
                        @endif
                        @foreach($challengelosejs as $challengelosej)
                            @if($challengelosej)
                            <li id="challenge_loser"> {{$challengelosej->team}}</li>
                             @endif
                        @endforeach
                    </ul>
                    <ul id="groupa">
                    <p>K</p>
                     
                    @if($challengekwinthrees)

@foreach($challengekwinthrees as $challengekwinthree)
                @if($challengekwinthree)
                    <li id="challenge_three"> {{$challengekwinthree->team}}*</li>
                @endif
                        @endforeach

                     @else 
                     
                     @foreach($challengekwins as $challengekwin)
                         @if($challengekwin)
                         <li id="challenge_winner"> {{$challengekwin->team}}</li>
                          @endif
                     @endforeach
                     @endif
                     @foreach($challengeloseks as $challengelosek)
                         @if($challengelosek)
                         <li id="challenge_loser"> {{$challengelosek->team}}</li>
                          @endif
                     @endforeach
                 </ul>
                 <ul id="groupa">
                    <p>L</p>
                    @if($challengelwinthrees)

@foreach($challengelwinthrees as $challengelwinthree)
                @if($challengelwinthree)
                    <li id="challenge_three"> {{$challengelwinthree->team}}*</li>
                @endif
                        @endforeach

                     @else 
                     
                     
                     @foreach($challengelwins as $challengelwin)
                         @if($challengelwin)
                         <li id="challenge_winner"> {{$challengelwin->team}}</li>
                          @endif
                     @endforeach
                     @endif
                     @foreach($challengelosels as $challengelosel)
                         @if($challengelosel)
                         <li id="challenge_loser"> {{$challengelosel->team}}</li>
                          @endif
                     @endforeach
                 </ul>
                 <ul id="groupa">
                    <p>M</p>
                    @if($challengemwinthrees)

@foreach($challengemwinthrees as $challengemwinthree)
                @if($challengemwinthree)
                    <li id="challenge_three"> {{$challengemwinthree->team}}*</li>
                @endif
                        @endforeach

                     @else 
                     
                     
                     @foreach($challengemwins as $challengemwin)
                         @if($challengemwin)
                         <li id="challenge_winner"> {{$challengemwin->team}}</li>
                          @endif
                     @endforeach
                     @endif
                     @foreach($challengelosels as $challengelosem)
                         @if($challengelosem)
                         <li id="challenge_loser"> {{$challengelosem->team}}</li>
                          @endif
                     @endforeach
                 </ul>
                 <ul id="groupa">
                    <p>N</p>
                    @if($challengenwinthrees)

@foreach($challengenwinthrees as $challengenwinthree)
                @if($challengenwinthree)
                    <li id="challenge_three"> {{$challengenwinthree->team}}*</li>
                @endif
                        @endforeach

                     @else 
                     
                     @foreach($challengenwins as $challengenwin)
                         @if($challengenwin)
                         <li id="challenge_winner"> {{$challengenwin->team}}</li>
                          @endif
                     @endforeach
                     @endif
                     @foreach($challengelosens as $challengelosen)
                         @if($challengelosen)
                         <li id="challenge_loser"> {{$challengelosen->team}}</li>
                          @endif
                     @endforeach
                 </ul>
                 <ul id="groupa">
                    <p>O</p>
                    @if($challengeowinthrees)

@foreach($challengeowinthrees as $challengeowinthree)
                @if($challengeowinthree)
                    <li id="challenge_three"> {{$challengeowinthree->team}}*</li>
                @endif
                        @endforeach

                     @else 
                     
                     
                     @foreach($challengeowins as $challengeowin)
                         @if($challengeowin)
                         <li id="challenge_winner"> {{$challengeowin->team}}</li>
                          @endif
                     @endforeach
                     @endif
                     @foreach($challengeloseos as $challengeloseo)
                         @if($challengeloseo)
                         <li id="challenge_loser"> {{$challengeloseo->team}}</li>
                          @endif
                     @endforeach
                 </ul>
                 <ul id="groupa">
                    <p>P</p>
                    @if($challengepwinthrees)

@foreach($challengepwinthrees as $challengepwinthree)
                @if($challengepwinthree)
                    <li id="challenge_three"> {{$challengepwinthree->team}}*</li>
                @endif
                        @endforeach

                     @else 
                     
                     
                     @foreach($challengepwins as $challengepwin)
                         @if($challengepwin)
                         <li id="challenge_winner"> {{$challengepwin->team}}</li>
                          @endif
                     @endforeach
                     @endif
                     @foreach($challengeloseps as $challengelosep)
                         @if($challengelosep)
                         <li id="challenge_loser"> {{$challengelosep->team}}</li>
                          @endif
                     @endforeach
                 </ul>

        </div>
            </div>

            @endif

           
<div class="panel panel-default" id="groups">
                <div class="panel-heading" ><h2>{{$gamedatas->id}} Group Stages</h2> </div>
                    <div class="panel-body">
                        <div class="col-4-sm">
                       
      <ul id="groupa"> 
        <p>A</p>            
            @foreach($groupas as $groupa)
            @if($groupa)
            <li> {{$groupa->team}}</li>
            @endif
            @endforeach
        </ul>

    <ul id="groupa">    
        <p>B</p>
            @foreach($groupbs as $groupb)
            @if($groupb)
            <li>{{$groupb->team}}</li>
            @endif
            @endforeach
    </ul>

    <ul id="groupa"> 
        <p>C</p>            
            @foreach($groupcs as $groupc)
             @if($groupc)
                    <li> {{$groupc->team}}</li>
             @endif
             @endforeach
        </ul>

    <ul id="groupa">    
        <p>D</p>
            @foreach($groupds as $groupd)
             @if($groupd)
                <li>{{$groupd->team}}</li>
             @endif
            @endforeach
         </ul>

           <ul id="groupa">    
        <p>E</p>
            @foreach($groupes as $groupe)
             @if($groupe)
                <li>{{$groupe->team}}</li>
             @endif
            @endforeach
            
         </ul>
         <ul id="groupa">    
        <p>F</p>
            @foreach($groupfs as $groupf)
             @if($groupf)
                <li>{{$groupf->team}}</li>
             @endif
            @endforeach
         </ul>
         <ul id="groupa">    
        <p>G</p>
            @foreach($groupgs as $groupg)
             @if($groupg)
                <li>{{$groupg->team}}</li>
             @endif
            @endforeach
         </ul>
         <ul id="groupa">    
        <p>H</p>
            @foreach($grouphs as $grouph)
             @if($grouph)
                <li>{{$grouph->team}}</li>
             @endif
            @endforeach
         </ul>
        </div>
            
    </div>
 </div>
           
        <h1>NHL2K7 Tourney {{$gamedatas->id}} R16 Breakdown</h1>
<main id="tournament">
	<ul class="round round-1">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homeonesawins as $homeoneawin)
            @if($homeoneawin)
               {{$homeoneawin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "><li class="game game-bottom">@foreach($homeonealosers as $homeonealoser)
            @if($homeonealoser)
               <p><strong>{{$homeonealoser->team}}</strong></p>
            @endif
        @endforeach</li>

		
		
		<li class="game game-top winner">@foreach($homeonesbwins as $homeonebwin)
            @if($homeonebwin)
               {{$homeonebwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeoneblosers as $homeonebloser)
            @if($homeonebloser)
               <p><strong>{{$homeonebloser->team}}</strong></p>
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">@foreach($homeonescwins as $homeonecwin)
            @if($homeonecwin)
               {{$homeonecwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">@foreach($homeoneclosers as $homeonecloser)
            @if($homeonecloser)
               <p><strong>{{$homeonecloser->team}}</strong></p>
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homeonesdwins as $homeonesdwin)
            @if($homeonesdwin)
               {{$homeonesdwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeonedlosers as $homeonedloser)
            @if($homeonedloser)
               <p><strong>{{$homeonedloser->team}}</strong></p>
            @endif
        @endforeach</li>

<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homeonesewins as $homeonesewin)
            @if($homeonesewin)
               {{$homeonesewin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeoneglosers as $homeonegloser)
            @if($homeonegloser)
               <p><strong>{{$homeonegloser->team}}</strong></p>
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>

		
		<li class="game game-top winner">@foreach($homeonesfwins as $homeonesfwin)
            @if($homeonesfwin)
               {{$homeonesfwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeoneflosers as $homeonefloser)
            @if($homeonefloser)
               <p><strong>{{$homeonefloser->team}}</strong></p>
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homeonesgwins as $homeonesgwin)
            @if($homeonesgwin)
               {{$homeonesgwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeoneglosers as $homeonegloser)
            @if($homeonegloser)
               <p><strong>{{$homeonegloser->team}}</strong></p>
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homeoneshwins as $homeoneshwin)
            @if($homeoneshwin)
               {{$homeoneshwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeonehlosers as $homeonehloser)
            @if($homeonehloser)
               <p><strong>{{$homeonehloser->team}}</strong></p>
            @endif
        @endforeach</li>

		
	</ul>
	<ul class="round round-2">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homeonesawins as $homeoneawin)
            @if($homeoneawin)
               {{$homeoneawin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeonesbwins as $homeonebwin)
            @if($homeonebwin)
               {{$homeonebwin->team}}
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homeonescwins as $homeonecwin)
            @if($homeonecwin)
               {{$homeonecwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($homeonesdwins as $homeonesdwin)
            @if($homeonesdwin)
               {{$homeonesdwin->team}}
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">@foreach($homeonesewins as $homeonesewin)
            @if($homeonesewin)
               {{$homeonesewin->team}}
            @endif
        @endforeach</li></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">@foreach($homeonesfwins as $homeonesfwin)
            @if($homeonesfwin)
               {{$homeonesfwin->team}}
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">@foreach($homeonesgwins as $homeonegwin)
            @if($homeonesgwin)
               {{$homeonesgwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">@foreach($homeoneshwins as $homeonehwin)
            @if($homeoneshwin)
               {{$homeoneshwin->team}}
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-3">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($hometwoawins as $hometwoawin)
            @if($hometwoawin)
               {{$hometwoawin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($hometwobwins as $hometwobwin)
            @if($hometwobwin)
               {{$hometwobwin->team}}
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">@foreach($hometwocwins as $hometwocwin)
            @if($hometwocwin)
               {{$hometwocwin->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">@foreach($hometwodwins as $hometwodwin)
            @if($hometwodwin)
               {{$hometwodwin->team}}
            @endif
        @endforeach</li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-4">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($homethreeawinners as $homethreeawinner)
            @if($homethreeawinner)
               {{$homethreeawinner->team}}
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom "> @foreach($homethreebwinners as $homethreebwinner)
            @if($homethreebwinner)
               {{$homethreebwinner->team}}
            @endif
        @endforeach</li>
      
		
		<li class="spacer">&nbsp;</li>
	</ul>		
    <ul class="round round-4">
		<li class="spacer">&nbsp;</li>
		<li class="game game-top winner">@foreach($winners as $winner)
            @if($winner)
               <p><strong>{{$winner->team}}</strong></p>
            @endif
        @endforeach</li>
		<li class="spacer">&nbsp;</li>
	</ul>		
</main>

               <p><strong>{{$groupawins}}</strong></p>
           </li>
   
        @foreach($groupbwins as $groupbwin)
            @if($groupbwin)
    <p><strong>{{$groupbwin->team}}</strong></p>
    @endif
        @endforeach</li>

          @foreach($groupcwins as $groupcwin)
            @if($groupcwin)
    <p><strong>{{$groupcwin->team}}</strong></p>
    @endif
        @endforeach</li>
        </div>
    </div>






@stop

@section('scripts')

<script>
    
    $(document).ready(function(){

//if you wish to keep both the divs hidden by default then dont forget to hide //them           
$("#groups").hide();
$("#playin_stage").hide();
$("#challenge_stage").hide();


$("#groups_button").click(function(){
      $("#groups").toggle();
   
});
$("#challenge_button").click(function(){
      $("#challenge_stage").toggle();
   
});
$("#playin_button").click(function(){
      $("#playin_stage").toggle();
   
});
});



</script>

@stop