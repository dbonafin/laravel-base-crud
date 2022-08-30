@extends('layout.app')

@section('title')
    Comics
@endsection

@section('main-content')

    <h1>Bestsellers</h1>

   <div class="comics-container">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <div class="comic-text">
                    <h2>Title: {{$comic->title}}</h2>

                    <div>Price: {{$comic->price}}&dollar;</div>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        More details
                    </a>

                </div>

                <div class="comic-img">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
            </div>
        @endforeach
   </div>
    
@endsection