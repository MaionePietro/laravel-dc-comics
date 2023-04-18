@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row row-cols-4">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card text-center" style="width: 18rem;">
                    <a href="{{ route('comics.show',$comic->id) }}">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                      <p class="card-text">{{$comic->price}}€</p>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

