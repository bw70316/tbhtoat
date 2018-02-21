@extends('layouts.create')



@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h1> Welcome to the {{$gamedatas->id}} profile page</h1>
          
            <div class="panel panel-default">
                <div class="panel-heading"><h2>{{$gamedatas->id}}</h2></div>
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

            @foreach($wins as $win) 
                @if($win)
                    <li>{{$win->team}} Record: {{$homeRecord}} </li>
                    @endif
            @endforeach

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
		
		<li class="game game-top winner">Lousville <span>77</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">Oregon <span>69</span></li>

		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top ">Mich St <span>61</span></li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom winner">Duke <span>71</span></li>

		<li class="spacer">&nbsp;</li>
	</ul>
	<ul class="round round-4">
		<li class="spacer">&nbsp;</li>
		
		<li class="game game-top winner">@foreach($winners as $winner)
            @if($winner)
               <p><strong>{{$winner->team}}</strong></p>
            @endif
        @endforeach</li>
		<li class="game game-spacer">&nbsp;</li>
		<li class="game game-bottom ">@foreach($losers as $loser)
            @if($loser)
               <p>{{$loser->team}}</p>
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

        </div>
    </div>
</div>



@stop
