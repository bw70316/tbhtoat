<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TBHToaT</title>

    <!-- Bootstrap Core CSS -->
    

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    

  

   

<link rel="icon" type="image/png" href="/images/download.png" sizes="16x16" />

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
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

<!-- Page Content -->
<div class="container" style="margin-top:100px;">

    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-sm-9">

            @yield('content')

        </div>
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-sm-3">

            <!-- Blog Search Well -->
            <div>
               

                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
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

            <!-- Side Widget Well -->
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
    </div>
    <!-- /.row -->
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Cutting Edge Info 2018</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->




@yield('scripts')


<script src="{{asset('js/libs.js')}}"></script>
</body>

</html>
