@extends('layouts.create')




@section('content')
    @include('includes.tinyeditor')
    <div class = "container">
         <div class="row">
             <div class="col-sm-3">
                 <img class="img-responsive" src="{{$post->photo ? $post->photo->file : $photo->photoPlaceholder}}" alt="">
             </div>
            <div class="col-sm-5">
                <h1>Update Post</h1>

                {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>
                {{ csrf_field() }}
                <div class="form-group">
                    {!! Form::label('category_id', 'Category:') !!}
                    {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
                </div>
                {{ csrf_field() }}
                {{--<div class="form-group">--}}
                    {{--{!! Form::label('author', 'Author:') !!}--}}
                    {{--{!! Form::text('author', null, ['class'=>'form-control']) !!}--}}
                {{--</div>--}}
                {{--{{ csrf_field() }}--}}

                {{--<div class="form-group">--}}
                    {{--{!! Form::label('photo_id', 'Photo:') !!}--}}
                    {{--{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}--}}
                {{--</div>--}}
                {{--{{ csrf_field() }}--}}

                <div class="form-group">
                    {!! Form::label('body', 'Text:') !!}
                    {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>8]) !!}
                </div>
                {{ csrf_field() }}



                <div class="form-group">
                    {!! Form::submit('Update Blog', ['class'=>'btn btn-success col-sm-3']) !!}
                </div>

                {!! Form::close() !!}



                {!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id], 'class'=>'pull-right']) !!}

                <div class="form-group-button" style="margin-bottom: 50px">
                    {!! Form::submit('Delete Post', ['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    {{--<div class="col-sm-6">--}}
        {{--@include('includes.form-error')--}}
    {{--</div>--}}
@stop