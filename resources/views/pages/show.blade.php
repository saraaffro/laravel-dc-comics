@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <h1>Comic:</h1>
   
    <h2>Title: {{$comic -> title}}</h2>
    <h3>Description: {{$comic -> description}}</h3>
    <h3>{{$comic -> price}} &euro;</h3>    
    
@endsection
