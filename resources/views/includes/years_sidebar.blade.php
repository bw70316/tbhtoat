<div class="well">
    <h4 style="text-align:center; margin-top:-10px; margin-right:15px;">YEARS</h4>
    <div class="row">
        <div class="col-sm-2">
            <ul class="list-unstyled" style="margin-left:40px">
           

                @foreach(array_slice($data->toArray(), 0, 6) as $item)
               
                 
                        <a href="{{route('years.show', $item)}}">{{$item ['year'] }}</a>
                        </li>
                     
                 @endforeach
            </ul>
        </div>
        <div class="col-sm-2">
        </div>
    
        <div class="col-sm-3">
            <ul class="list-unstyled" style="margin-left:40px">
            @foreach(array_slice($data->toArray(), 7, 14) as $item)
               
                 
               <a href="{{route('years.show', $item)}}">{{$item ['year'] }}</a>
               </li>
            
        @endforeach
                
            </ul>
        </div>
    </div>
  </div>