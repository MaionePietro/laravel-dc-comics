@extends('layouts.app')

@section('content')
<div class="row row-cols-4">
    @foreach ($comics as $comic)
        <div class="col">
            <div class="card text-center" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$comic->title}}</h5>
                  <p class="card-text">{{$comic->price}}€</p>
                </div>
              </div>
        </div>
    @endforeach
</div>


@endsection
