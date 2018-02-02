@extends('layouts.app')




@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <h1>Blogs</h1>


                <table class="table">
                <thead>
                    <tr>
                         <th>Id</th>
                {{--<th>Photo</th>--}}
                        <th>User</th>
                <th>Category</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>

                    @if($posts)

                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                                <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->author}}</td>
                                <td>{{str_limit($post->body, 50)}}</td>
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