@extends('layouts.create')




@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">

            
            <h1>{{$posts->last()->title}}</h1>
            <p>{{$posts->last()->category->name}}</p>
            <p>{{$posts->last()->body}}</p>
            <p>{{$posts->last()->user->name}}</p>
            <img class="img-responsive" src="{{$posts->last()->photo ? $posts->last()->photo->file : null}}" alt="">
            <!-- <p>{{$posts->last()->title}}</p> -->
               


                <table class="table">
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

                {{--<div class="row">{{$post->body}}</div>--}}
             <a href="{{ url('/posts/create') }}" class="btn btn-primary">Add Blog</a>
            </div>
        </div>
    </div>
@stop