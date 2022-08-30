@extends('layout.app')

@section('title')
    Comics
@endsection

@section('main-content')

    <h1>Bestsellers</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>Title: {{$comic->title}}</h2>

            <div>Price: {{$comic->price}}&dollar;</div>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                More details
            </a>

            <div>
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
        </div>
    @endforeach
    
@endsection