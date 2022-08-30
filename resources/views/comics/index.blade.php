@extends('layout.app')

@section('main-content')

    @foreach ($comics as $comic)
        <div>
            <h2>{{$comic->title}}</h2>
        </div>
    @endforeach
    
@endsection