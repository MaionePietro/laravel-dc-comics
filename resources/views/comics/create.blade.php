@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>New comic</h1>
  </div>

  <div class="container">
    <form action="{{ route('comics.store') }}" method="POST">

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" >
      </div>

      <div class="mb-3">
          <label for="thumb" class="form-label">Immagine (url)</label>
          <input type="text" class="form-control" id="thumb" name="thumb" >
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" >
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" >
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" >
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          <textarea class="form-control" name="description" id="description""></textarea>
        </div>

      <button type="submit" class="btn btn-primary">Salva</button>


    </form>
  </div>

@endsection
