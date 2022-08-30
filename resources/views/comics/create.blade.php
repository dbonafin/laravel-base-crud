@extends('layout.app')

@section('title')
    Create your comic book
@endsection

@section('main-content')
    <h1>
        Here you can create a new comic book filling the next form
    </h1>

    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <br>

        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price">
        </div>
        <br>

        <div>
            <label for="type">Type</label>
            <input type="text" id="type" name="type">
        </div>
        <br>


        <div>
            <label for="series">Series</label>
            <input type="text" id="series" name="series">
        </div>
        <br>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="40" rows="5"></textarea>
        </div>
        <br>

        <div>
            <label for="thumb">Url image</label>
            <input type="text" id="thumb" name="thumb">
        </div>
        <br>

        <button>Submit</button>
    </form>
@endsection