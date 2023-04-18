@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center text-center">
        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" alt="" style="width: 30%">
        <p>{!! $comic->description !!}</p>
    </div>
@endsection
