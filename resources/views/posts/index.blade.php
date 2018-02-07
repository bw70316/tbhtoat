@extends('layouts.create')




@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
           <h1>Welcome to the Blog Section!!!</h1>
           <h3>Below is the most recent blog, scroll down for option to peruse other blogs detailing past glories and follies.</h3>
            
            <h1>{{$posts->last()->title}}</h1>
            <p class="lead">
        by  {{$posts->last()->user->name}}
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted {{$posts->last()->created_at->diffForHumans()}}</p>
          <!-- <p> Category: {{$posts->last()->category->name}}</p> -->
          <img class="img-responsive" style="float:left; height:100px; width:120px; margin-right:15px;"src="{{$posts->last()->photo ? $posts->last()->photo->file : null}}" alt="">
            <p style="overflow-wrap: break-word;">{!!$posts->last()->body!!}</p>
            
            
            <!-- <p>{{$posts->last()->title}}</p> -->
               


                <!-- <table class="table">
                <thead>
                    <tr>
                         <th>Author</th>
                         <th>View Blog</th>
                        <th>Category</th>
                    
                       
                        <th>Title</th>
                        <th>Photo</th>
                        {{--<th>Body</th>--}}
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>

                    @if($posts)

                        @foreach($posts->reverse() as $post)
                            <tr>
                                <td>{{$post->user->name}}</td>
                                <td><a href="{{route('posts.show', $post->id)}}">View Blog</a></td>
                                <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                                <td>{{$post->title}}</td>
                                <td><img height="100" src="{{$post->photo ? $post->photo->file : 'placehold.it/400x400'}}" alt=""></td>
                                {{--<td>{{str_limit($post->body, 50)}}</td>--}}
                                <td>{{$post->created_at->diffForHumans()}}</td>
                                <td>{{$post->updated_at->diffForHumans()}}</td>
                            </tr>

                        @endforeach
                    @endif
                    </tbody>
                </table>

                {{--<div class="row">{{$post->body}}</div>--}} -->
                <a href="{{ url('/posts/create') }}" class="btn btn-primary">Add Blog</a>
             <a href="{{ url('/posts/all') }}" class="btn btn-primary">View Past Blogs</a>


            </div>
        </div>
    </div>
@stop