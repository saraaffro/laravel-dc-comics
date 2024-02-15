@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics:</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                Title: {{$comic -> title}}
                <br>
                Description: {{$comic -> description}}
                <br>
                {{$comic -> price}} &euro;
            </li>
        @endforeach
    </ul>
@endsection
