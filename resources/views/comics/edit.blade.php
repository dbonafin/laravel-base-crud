{{-- EDIT COMICBOOK PAGE DETAILS --}}

@extends('layout.app')

@section('title')
    Edit a comic book
@endsection

@section('main-content')
    <h1>Edit the comic book by yourself</h3>

    @if ($errors->any())
        <div class="validation-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
        @csrf
        @method('PUT')

        {{-- Title input details --}}
        <div>
            <div>
                <label for="title">Title</label>
            </div>

            <input 
                type="text" 
                id="title" 
                name="title"
                value="{{ old('title') ? old('title') : $comic->title }}"
            >
        </div>

        {{-- Price input details --}}
        <div>
            <div>
                <label for="price">Price</label>
            </div>

            <input 
                type="text" 
                id="price" 
                name="price"
                value="{{ old('price') ? old('price') : $comic->price }}"
            >
        </div>

        {{-- Type input details --}}
        <div>
            <div>
                <label for="type">Type</label>
            </div>

            <input 
                type="text" 
                id="type" 
                name="type"
                value="{{ old('type') ? old('type') : $comic->type }}"
            >
        </div>

        {{-- Series input details --}}
        <div>
            <div>
                <label for="series">Series</label>
            </div>

            <input 
                type="text" 
                id="series" 
                name="series"
                value="{{ old('series') ? old('series') : $comic->series }}"
            >
        </div>

        {{-- Description input details --}}
        <div class="description-form">
            <div>
                <label for="description">Description</label>
            </div>

            <textarea 
                name="description" 
                id="description" 
                cols="40" 
                rows="5"
            >{{ old('description') ? old('description') : $comic->description }}
            </textarea>
        </div>

        {{-- Image url input details --}}
        <div>
            <div>
                <label for="thumb">Url image</label>
            </div>

            <input 
                type="text" 
                id="thumb" 
                name="thumb" 
                value="{{ old('thumb') ? old('thumb') : $comic->thumb }}"
            >
        </div>

        {{-- Sale date input details --}}
        <div>
            <div>
                <label for="sale_date">Sale date</label>
            </div>

            <input 
                type="date" 
                id="sale_date" 
                name="sale_date"
                value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}"
            >
        </div>

        <input type="submit" value="Create" class="create-comic">
    </form>

@endsection