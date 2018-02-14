
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
	<div class="col-sm-9">
		<div class="table-responsive text-center">
        <table id="table" class="display" cellspacing="0" width="100%">
				<tbody style="color:blue; text-align:center;"> 
                    <thead>
                   
					    <tr>
                        <th class="text-center">id</th>
						    <th class="text-center">Year</th>
						    <th class="text-center">Game #</th>
                            <th class="text-center">Home Team</th>
						    <th class="text-center">Away Team</th>
                            <th class="text-center">Home Win</th>
						    <th class="text-center">Away Win</th>
                            <th class="text-center">Tie</th>
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
            {data: 'year', name: 'year'},
            
            {data: 'game', name: 'game'},
            {data: 'awayTeam', name: 'awayTeam'},
            {data: 'homeTeam', name: 'homeTeam'},
            {data: 'homeWin', name: 'homeWin'},
            {data: 'awayWin', name: 'awayWin'},
            {data: 'tie', name: 'tie'},
            {data: 'stage', name: 'stage'},
            {data: 'round', name: 'round'},
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


