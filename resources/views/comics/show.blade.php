@extends('layout.app')

@section('main-content')
   
    <h2>Title: {{$comic->title}}</h2>

    <div>Price: {{$comic->price}}&dollar;</div>
    
    <div>Overview: {{$comic->description}}</div>
    <div>Type: {{$comic->type}}</div>
    <div>Series: {{$comic->series}}</div>

    <div>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
    
@endsection