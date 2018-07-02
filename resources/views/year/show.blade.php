<h1>{{$gamedatas->year}}</h1>

@if(isset($semiFinalWins) && isset($semiFinalLosses))
@foreach($semiFinalWins as $key => $sfn)
<td>{{$sfn}}-{{$semiFinalLosses[$key]}}</td>
@endforeach
@endif