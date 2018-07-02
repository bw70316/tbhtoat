<div class="well">
    <h3 style="text-align:center; margin-top:-10px;">TEAMS</h3>
     <div class="row">
  
        <div class="col-sm-3">
            <ul class="list-unstyled">
            @foreach(array_slice($teams->toArray(), 0, 33) as $team)
               
           
            <li style="width: 100px; margin-right:5px;">
               <a href="{{route('teams.show', $team)}} ">{{$team ['team'] }}</a>
               </li>
            
        @endforeach

              
            </ul>
        </div>
        <div class="col-sm-3">
        <p>   </p>
        </div>
        <div class="col-sm-3">
            <ul class="list-unstyled">
            @foreach(array_slice($teams->toArray(), 33, 66) as $team)
         
               
           
         <li style="width: 100px;">
         <a href="{{route('teams.show', $team)}}">{{$team ['team'] }}</a>
         </li>
      
  @endforeach
         
                
            </ul>
        </div>
    </div>
</div>