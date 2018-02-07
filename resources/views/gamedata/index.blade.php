@extends('layouts.admin')




@section('content')

    <div class="col-sm-6">
    <h1>Posts</h1>


    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Edit Post</th>
              <th>Category</th>
              <th>Title</th>
              <th>Author</th>
              <th>Body</th>
              <th>View Post</th>
              <th>Comments</th>
              <th>Created At</th>
              <th>Updated At</th>
          </tr>
        </thead>
        <tbody>

        @if($gamedatas)

            @foreach($gamedatas as $gamedata)
          <tr>
            <td>{{$gamedata->year}}</td>
              

          @endforeach
          @endif
        </tbody>
      </table>

    </div>
    @stop