@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>New Comic:</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <form action="{{ route('comics.store') }}" method="POST">

        @csrf
        @method('POST')
        
        
        <h3>Title</h3>
        <input type="text" name="title" id="title">
    
        <h3>Description</h3>
        <input type="text" name="description" id="description">
        
        <h3>Price</h3>    
        <input type="text" name="price" id="price">
    
        <br>
        <br>
        <input type="submit" value="CREATE">
    </form>
   
@endsection
