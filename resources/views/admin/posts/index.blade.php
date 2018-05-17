@extends('layouts.admin')




@section('content')

    <div class="col-sm-6">
    <h1>Posts</h1>


    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Edit Post</th>
              <th>Category</th>
              <th>Author</th>
              <th>View Post</th>
              <th>Comments</th>
              <th>Created At</th>
              <th>Updated At</th>
          </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
              <td><img style= "height: 50px" src="{{$post->photo ? $post->photo->file : "http://placehold.it/50x50"}}" alt="" class="img-responsive img-rounded"></td>
              <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</td>
            <td>{{$post->user->name}}</a></td>
              <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
              
              <td>{{$post->author}}</td>
              <td><a href="{{route('home.post', $post->slug)}}">View Post</a></td>
              <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>

          @endforeach
          @endif
        </tbody>
      </table>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">
                {{$posts->render()}}
            </div>
        </div>
    </div>
    @stop