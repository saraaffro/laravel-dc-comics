@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
    <h1>Edit Comic:</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <form action="{{ route('comics.update', $comic -> id) }}" method="POST">

        @csrf
        @method('PUT')
        
        
        <h3>Title</h3>
        <input type="text" name="title" id="title" value="{{ $comic -> title}}">
    
        <h3>Description</h3>
        <input type="text" name="description" id="description" value="{{ $comic -> description}}">
        
        <h3>Price</h3>    
        <input type="text" name="price" id="price" value="{{ $comic -> price}}">
    
        <br>
        <br>
        <input type="submit" value="UPDATE">
    </form>
   
@endsection
