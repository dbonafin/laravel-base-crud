{{-- CREATE A COMIC BOOK PAGE DETAILS --}}

@extends('layout.app')

@section('title')
    Create your comic book
@endsection

@section('main-content')
    <h1>
        Here you can create a new comic book filling the next form
    </h1>

    {{-- Validation error message --}}
    @if ($errors->any())
        <div class="validation-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Create a comic book form --}}
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        {{-- Title input details --}}
        <div>
            <div>
                <label for="title">Title</label>
            </div>
            <input type="text" id="title" name="title">
        </div>
        
        {{-- Price input details --}}
        <div>
            <div>
                <label for="price">Price</label>
            </div>
            <input type="text" id="price" name="price">
        </div>

        {{-- Type input details --}} 
        <div>
            <div>
                <label for="type">Type</label>
            </div>
            <input type="text" id="type" name="type">
        </div>

        {{-- Series input details --}}
        <div>
            <div>
                <label for="series">Series</label>
            </div>
            <input type="text" id="series" name="series">
        </div>

        {{-- Description textarea details --}}
        <div class="description-form">
            <div>
                <label for="description">Description</label>
            </div>
            <textarea name="description" id="description" cols="30" rows="5"></textarea>
        </div>

        {{-- Image url input details --}}
        <div>
            <div>
                <label for="thumb">Url image</label>
            </div>
            <input type="text" id="thumb" name="thumb">
        </div>

        {{-- Sale date input details --}}
        <div>
            <div>
                <label for="sale_date">Sale date</label>
            </div>
            <input type="date" id="sale_date" name="sale_date">
        </div>

        {{-- Create input button --}}
        <input type="submit" value="Create" class="create-comic">
    </form>

@endsection