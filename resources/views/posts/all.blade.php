@extends('layouts.create')




@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-6">
        <h1 style="border-bottom: 5px solid red;">Blogs of Games Past</h1>
         
               


                <table class="table">
                <thead>
                    <tr>
                         <th>Author</th>
                         <th>View Blog</th>
                        <th>Category</th>
                    
                       
                        <th>Title</th>
                        <th>Photo</th>
                        
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

           
            
             
            </div>
        </div>
    </div>
@stop