{{-- ALL COMICS PAGE DETAILS --}}

@extends('layout.app')

@section('title')
    Comics
@endsection

@section('main-content')

    <h1>Bestsellers</h1>

   <div class="comics-container">

        @foreach ($comics as $comic)
            <div class="comic-card">

                {{-- Left part of the comic book card --}}
                <div class="comic-text">
                    <h2>Title: {{$comic->title}}</h2>

                    <div>Price: {{$comic->price}}&dollar;</div>

                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        More details
                    </a>

                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                        Edit
                    </a>

                    <div class="delete-form">
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
        
                            <input 
                                type="submit" 
                                value="Delete" 
                                onClick="return confirm('Are you sure?');"
                            >
                        </form>
                    </div>
                </div>

                {{-- Right part of the comic book card --}}
                <div class="comic-img">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>

            </div>
        @endforeach

   </div>
    
@endsection