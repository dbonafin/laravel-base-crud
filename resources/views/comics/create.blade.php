{{-- CREATE A COMIC BOOK PAGE DETAILS --}}

@extends('layout.app')

@section('title')
    Create your comic book
@endsection

@section('main-content')
    <h1>
        Here you can create a new comic book filling the next form
    </h1>

    {{-- Create a comic book form --}}
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <div>
                <label for="title">Title</label>
            </div>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <div>
                <label for="price">Price</label>
            </div>
            <input type="text" id="price" name="price">
        </div>

        <div>
            <div>
                <label for="type">Type</label>
            </div>
            <input type="text" id="type" name="type">
        </div>


        <div>
            <div>
                <label for="series">Series</label>
            </div>
            <input type="text" id="series" name="series">
        </div>

        <div class="description-form">
            <div>
                <label for="description">Description</label>
            </div>
            <textarea name="description" id="description" cols="40" rows="5"></textarea>
        </div>

        <div>
            <div>
                <label for="thumb">Url image</label>
            </div>
            <input type="text" id="thumb" name="thumb">
        </div>

        <div>
            <div>
                <label for="sale_date">Sale date</label>
            </div>
            <input type="date" id="sale_date" name="sale_date">
        </div>

        <input type="submit" value="Create" class="create-comic">
    </form>

@endsection