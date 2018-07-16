@extends('layouts.home')

@section('content')



    <!-- Blog Sidebar Widgets Column -->
 
		{{ csrf_field() }}

    
	    <div class="col-sm-4">
		    	
		<div class="well">
         <h4 style="text-align:center; margin-top:-10px;">All-Time Power Index</h4>
          <div class="row">
            <div class="col-sm-12">
         

             @if($rankOnes)

             @foreach($rankOnes as $rankOne)
               <ul>
                  <li style="list-style-type:none; text-aligned: left"> {{$loop->iteration}}. {{$rankOne->team}}</li>
                </ul>
                
            @endforeach
            @endif
            </div>
            </div>
          
            <div class="row">
            <div class="col-sm-12" id="ranks" style="display:none;">
            
            
            @if($rankTwos)

@foreach($rankTwos as $indexKey => $rankTwo)
  <ul>
     <li style="list-style-type:none; text-aligned: left"> {{$indexKey+11}}. {{$rankTwo->team}}</li>
   </ul>
@endforeach
@endif

            </div>
            </div>
            <button class="btn btn-primary" onclick="showRanks()">Show All</button>


      </div>
        </div>
        <div class="col-sm-1">
        </div>
        
        <div class="col-sm-4">
		    	
		<div class="well">
       <h4 style="text-align:center; margin-top:-10px;">Past Champions</h4>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-unstyled" style="text-align:center; margin: 7px;">
            @if($seasonOnes)

            @foreach($seasonOnes as $seasonOne)
            <strong>2016 Winner</strong>

            <p>{{$seasonOne->am}}<p>

            @endforeach
            @endif
            
           
      
           <p>   {!!$seasonOneWins!!}-{!!$seasonOneLosses!!}-{!!$seasonOneTies!!}<p>







@if($seasonTwos)

            @foreach($seasonTwos as $seasonTwo)
<strong>2015 Winner</strong>
<br>
{{$seasonTwo->am}}
<p>   {!!$seasonTwoWins!!}-{!!$seasonTwoLosses!!}-{!!$seasonTwoTies!!}<p>
@endforeach
@endif
                <br><br>
@if($seasonThrees)

@foreach($seasonThrees as $seasonThree)
<strong>2014 Winner</strong>
<br>
{{$seasonThree->am}}
<p>   {!!$seasonThreeWins!!}-{!!$seasonThreeLosses!!}-{!!$seasonThreeTies!!}<p>
@endforeach
@endif

<br>
<br>
@if($seasonFours)

@foreach($seasonFours as $seasonFour)
<strong>2013 Winner</strong>
<br>
{{$seasonFour->am}}
<p>   {!!$seasonFourWins!!}-{!!$seasonFourLosses!!}-{!!$seasonFourTies!!}<p>
@endforeach
@endif
<br>
<br>

@if($seasonFives)

@foreach($seasonFives as $seasonFive)
<strong>2012 Winner</strong>
<br>
{{$seasonFive->am}}
<p>   {!!$seasonFiveWins!!}-{!!$seasonFiveLosses!!}-{!!$seasonFiveTies!!}<p>
@endforeach
@endif
<br>


<div class="details" id="details" style="display:none">
@if($seasonSixes)
@foreach($seasonSixes as $seasonSix)
<strong>2011 Winner</strong>
<br>
{{$seasonSix->am}}
<p>   {!!$seasonSixWins!!}-{!!$seasonSixLosses!!}-{!!$seasonSixTies!!}<p>
@endforeach
@endif
<br>
<br>



@if($seasonSevens)
@foreach($seasonSevens as $seasonSeven)
<strong>2010 Winner</strong>
<br>
{{$seasonSeven->am}}
<p>   {!!$seasonSevenWins!!}-{!!$seasonSevenLosses!!}-{!!$seasonSevenTies!!}<p>

@endforeach
@endif

<br>
<br>
@if($seasonEights)
@foreach($seasonEights as $seasonEight)
<strong>2009 Winner</strong>
<br>
{{$seasonEight->am}}
<p>   {!!$seasonEightWins!!}-{!!$seasonEightLosses!!}-{!!$seasonEightTies!!}<p>
@endforeach
@endif

<br>
<br>
@if($seasonNines)
@foreach($seasonNines as $seasonNine)
<strong>2008 Winner</strong>
<br>
{{$seasonNine->am}}
<p>   {!!$seasonNineWins!!}-{!!$seasonNineLosses!!}-{!!$seasonNineTies!!}<p>
@endforeach
@endif

<br>
<br>
@if($seasonTens)
@foreach($seasonTens as $seasonTen)
<strong>2007 Winner</strong>
<br>
{{$seasonTen->am}}
<p>   {!!$seasonTenWins!!}-{!!$seasonTenLosses!!}-{!!$seasonTenTies!!}<p>
@endforeach
@endif


@if($seasonElevens)
@foreach($seasonElevens as $seasonEleven)
<strong>2006 Winner</strong>
<br>
{{$seasonEleven->am}}
<p>   {!!$seasonElevenWins!!}-{!!$seasonElevenLosses!!}-{!!$seasonElevenTies!!}<p>
@endforeach
@endif
<br>
<br>

@if($seasonTwelves)
@foreach($seasonTwelves as $seasonTwelve)
<strong>2005 Winner</strong>
<br>
{{$seasonTwelve->am}}
<p>   {!!$seasonTwelveWins!!}-{!!$seasonTwelveLosses!!}-{!!$seasonTwelveTies!!}<p>
@endforeach
@endif
<br>
<br>
</div>



<button class="btn btn-primary" onclick="showChamps()">Show Champs</button>
            </ul>
        </div>
        </div>
       
               
  

<!-- Blog Search Well -->


<!-- Blog Categories Well -->


<!-- Side Widget Well -->





        </div>

    </div>
    

			




@endsection

<script>
function showChamps() {
    var x = document.getElementById("details");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function showRanks() {
    var x = document.getElementById("ranks");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>