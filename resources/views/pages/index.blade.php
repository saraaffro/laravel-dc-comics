@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics:</h1>
    <a href="{{ route('comics.create')}}">NEW COMIC</a>
    <br>
    <br>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic -> id) }}">
                    Title: {{$comic -> title}}
                </a>
                <a href="{{ route('comics.edit', $comic -> id) }}" class="edit">
                    EDIT
                </a>
                <form action="{{route('comics.destroy', $comic -> id) }}" method="POST" class="d-inline-block">

                    @csrf
                    @method('DELETE')
                    <input type="submit" value="X"> 
                </form>
            </li>
        @endforeach
    </ul>
@endsection
