@extends('layouts.create')



@section('content')


    <div class="row">
        <div class="col-sm-9">
            
            <div class="panel panel-default" id="group_stage">
                <div class="panel-heading"><h2>{{$team}} 


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