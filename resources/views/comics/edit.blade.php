@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit: {{ $comic->title }}</h1>
    </div>

    <div class="container">
        <form action="{{ route('comics.update', $comic) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$comic->title)}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine (url)</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb',$comic->thumb) }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series',$comic->series) }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_data',$comic->sale_data) }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type',$comic->type) }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price',$comic->price) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea class="form-control" name="description" id="description">
                    {{ old('description',$comic->description) }}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>


        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
