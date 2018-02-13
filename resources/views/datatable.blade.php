
<!DOCTYPE html>
<html>
<head>
<title>Datatables implementation in laravel - justlaravel.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
	src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- <link rel="stylesheet"
	href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"> -->
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    </script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
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
		<div class="col-sm-9"
			<div class="table-responsive text-center">
				<table class="table table-borderless" id="table">
				<thead>
					<tr>
						<th class="text-center">Year</th>
						<th class="text-center">Game #</th>
                        <th class="text-center">Team</th>
						<th class="text-center">Opponent</th>
					
					</tr>
				</thead>
			
			</table>
		</div>
		</div>
	</div>
			



<script type="text/javascript">
$(document).ready(function() {
    $('.table').DataTable({
        processing: true,
        serverSide: true,
        order: [],
        orderFixed: {
        "post": [[ 0, 'asc' ], [ 1, 'asc' ]]
    },

        ajax: '{{ route('datatable/getdata') }}',
 
        columns: [
            {data: 'year', name: 'year'},
            {data: 'game', name: 'game'},
            {data: 'team', name: 'team'},
            {data: 'opponent', name: 'opponent'},
        ]
        
    });
});
</script>

	</body>
</html>


