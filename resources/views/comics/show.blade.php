{{-- SINGLE CARD DETAILS --}}

@extends('layout.app')

@section('title')
    {{$comic->title}}
@endsection

@section('main-content')
   
   <div class="card-container">
        {{-- Left part of the comic book card --}}
        <div class="card-text">
            <div>
                <h2>
                    Title: {{$comic->title}}
                </h2>
            </div>

            <div>
                Price: {{$comic->price}} &dollar;
            </div>

            <div>
                Overview: {{$comic->description}}
            </div>
            
            <div>
                Type: {{$comic->type}}
            </div>

            <div>
                Series: {{$comic->series}}
            </div>

            <div>
                Sale date: {{$comic->sale_date}}
            </div>

            <div class="edit-link">
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                    Edit
                </a>
            </div>

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
        <div class="card-image">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
   </div>
    
@endsection