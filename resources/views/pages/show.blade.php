@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>Comic {{$comic -> title}}</h1>
   
    <h3>Title:</h3>
    <p>{{$comic -> title}}</p>
    <h3>Description:</h3>
    <p>{{$comic -> description}}</p>
    <h3>Price:</h3> 
    <p>{{$comic -> price}} &euro;</p>   
    
@endsection
