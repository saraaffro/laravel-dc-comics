@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics:</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic -> id)}}">
                    Title: {{$comic -> title}}
                </a>
                
            </li>
        @endforeach
    </ul>
@endsection
