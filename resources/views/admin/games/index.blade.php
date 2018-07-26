@extends('layouts.admin')





@section('content')


<h1>Games</h1>
 

 @if($games)
 @foreach($games as $game)
 <td>{{$game}}</td>
 @endforeach
 @endif

@stop