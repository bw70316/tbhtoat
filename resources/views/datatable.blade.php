
<!DOCTYPE html>
<html>
<head>
<title>Datatables implementation in laravel - justlaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<script src="https://code.jquery.com/jquery-1.12.4.js"</script>
 <script src = "https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script
	src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>


<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<style>

</style>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">TBHToaT</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav ml-auto" id="create-nav" style="margin-left: 750px">
                <li>
                    <a href="/posts">Blog</a>
                </li>
                <li>
                    <a href="/games">Games</a>
                </li>
                <li>
                    <a href="/data">Data</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container" style="margin-top:80px;">
		{{ csrf_field() }}
    <div class="row">
    
	    <div class="col-sm-9">
		    <div class="table-responsive text-center" >
                <table id="table" class="display" cellspacing="0" style="float:left">
				    <tbody style="color:blue; text-align:center;"> 
                        <thead>                   
					        <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Year</th>
                                <th class="text-center">Game #</th>
                                <th class="text-center">Home Team</th>
                                <th class="text-center">Away Team</th>
                                <th class="text-center">Home Win</th>
                                <th class="text-center">Away Win</th>
                                <th class="text-center">Tie</th>
                                <th class="text-center">Elimination</th>
                                <th class="text-center">Stage</th>
                                <th class="text-center">Round</th>
                                <th class="text-center">Stage Series</th>
                                <th class="text-center">Series Game</th>
                                <th class="text-center">Home Score</th>
                                <th class="text-center">Away Score</th>
                            				
					        </tr>
				    </thead>
                </tbody>
			
		    </table>
	    </div>

      
        </div>
        <div class="col-sm-3">

<!-- Blog Search Well -->
<div>
    {{--<h4>Blog Search</h4>--}}
    {{--<div class="input-group">--}}
        {{--<input type="text" class="form-control">--}}
        {{--<span class="input-group-btn">--}}
                {{--<button class="btn btn-default" type="button">--}}
                    {{--<span class="glyphicon glyphicon-search"></span>--}}
            {{--</button>--}}
            {{--</span>--}}

    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4 style="text-align:center; margin-top:-10px; margin-right:15px;">YEARS</h4>
    <div class="row">
        <div class="col-sm-2">
            <ul class="list-unstyled" style="margin-left:40px">
           

                @foreach(array_slice($data->toArray(), 0, 6) as $item)
               
                 
                        <a href="3">{{$item ['year'] }}</a>
                        </li>
                     
                 @endforeach
            </ul>
        </div>
        <div class="col-sm-2">
        </div>
    
        <div class="col-sm-3">
            <ul class="list-unstyled" style="margin-left:40px">
            @foreach(array_slice($data->toArray(), 7, 23) as $item)
               
                 
               <a href="game/showyear/{$id}">{{$item ['year'] }}</a>
               </li>
            
        @endforeach
                
            </ul>
        </div>
    </div>
  </div>
 

<!-- Side Widget Well -->
<div class="well">
    <h3 style="text-align:center; margin-top:-10px;">TEAMS</h3>
     <div class="row">
  
        <div class="col-sm-3">
            <ul class="list-unstyled">
            @foreach(array_slice($teams->toArray(), 0, 33) as $team)
         
               
           
            <li style="width: 100px; margin-right:5px;">
               <a href="#">{{$team ['team'] }}</a>
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
         <a href="#">{{$team ['team'] }}</a>
         </li>
      
  @endforeach
         
                
            </ul>
        </div>
    </div>
</div>

</div>

</div>
        </div>

    </div>
    
</div>
			



<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable({
      
        processing: true,
        serverSide: true,
        order: [],      
    columnDefs: [
    { "orderable": false, "targets": [10] }
  ],

        ajax: '{{ route('datatable/getdata') }}',
 
        columns: [
            {data: 'id', name: 'id', "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href=/games/"+oData.id+">"+oData.id+"</a>");
        }},
            {data: 'year', name: 'year', "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href=/games/showyear/"+oData.year+">"+oData.year+"</a>");
        }},
            
            {data: 'game', name: 'game'},

            {data: 'homeTeam', name: 'homeTeam', "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href=/teams/display/"+oData.homeTeam+">"+oData.homeTeam+"</a>");
            }},

            {data: 'awayTeam', name: 'awayTeam'},           
            {data: 'homeWin', name: 'homeWin'},
            {data: 'awayWin', name: 'awayWin'},
            {data: 'tie', name: 'tie'},
            {data: 'elimination', name:'elimination'},
           

            {data: 'stage', name: 'stage', "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href=/stages/display/"+oData.stage+">"+oData.stage+"</a>");
            }},
            {data: 'round', name: 'round', "fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
            $(nTd).html("<a href=/rounds/display/"+oData.round+">"+oData.round+"</a>");
            }},
            
            {data: 'stageSeries', name: 'stageSeries'},
            {data: 'seriesGame', name: 'seriesGame'},
            {data: 'homeScore', name: 'homeScore'},
            {data: 'awayScore', name: 'awayScore'},
           
           
        ]
        
    });
});
</script>

	</body>
</html>


