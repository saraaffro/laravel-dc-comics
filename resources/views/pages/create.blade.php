@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>New Comic:</h1>
   
    <h3>Title</h3>
    <input type="text" name="title" id="title">

    <h3>Description</h3>
    <input type="text" name="decsription" id="decsription">
    
    <h3>Price</h3>    
    <input type="text" name="price" id="price">

    <br>
    <br>
    <input type="submit" value="CREATE">
@endsection
