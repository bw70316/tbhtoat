@extends('layouts.admin')




@section('content')

    <h1>Comments Section</h1>

    <p>Welcome Admins! Here you can wield your admin prowess to which comments are to be viewed for all eternity, and which get banished to the depths of cyber hell.</p>
    @if(count($comments) > 0)
    <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Comment Author</th>
            <th>Email</th>
              <th>Comment</th>
              <th>View Post</th>
              <th>Approve</th>
              <th>Delete</th>

          </tr>
        </thead>

        @foreach($comments as $comment)
        <tbody>
          <tr>
            <td>{{$comment->id}}</td>
            <td>{{$comment->author}}</td>
            <td>{{$comment->email}}</td>
              <td>{{$comment->body}}</td>
              <td><a href="{{route('home.post', $comment->post->id)}}">View Post</a></td>
              <td><a href="{‌{ route('replies.show', $comment->id) }}">View Replies</a></td>
              <td>

                  @if($comment->is_active == 1)

                       {!! Form::open(['method'=>'PATCH', 'action'=>['PostsCommentsController@update', $comment->id]]) !!}
                                <input type="hidden" name="is_active" value="0">

                               <div class="form-group">
                                   {!! Form::submit('Disapprove', ['class'=>'btn btn-success']) !!}
                               </div>

                           {!! Form::close() !!}

                      @else


                      {!! Form::open(['method'=>'PATCH', 'action'=>['PostsCommentsController@update', $comment->id]]) !!}
                      <input type="hidden" name="is_active" value="1">

                      <div class="form-group">
                          {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                      </div>

                      {!! Form::close() !!}

                  @endif

              </td>
              <td>

                  {!! Form::open(['method'=>'DELETE', 'action'=>['PostsCommentsController@destroy', $comment->id]]) !!}


                  <div class="form-group">
                      {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                  </div>

                  {!! Form::close() !!}
              </td>
          </tr>

        @endforeach

        </tbody>
      </table>

        @else

        <h1 class="text-center">No Comments</h1>
   @endif

@stop