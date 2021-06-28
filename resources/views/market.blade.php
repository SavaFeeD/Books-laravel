@extends('layout')

@section('content')
<div>
  <h1>Магазин</h1>

  <div class="d-flex flex-wrap">
    @foreach($books as $book)
    <a href="/book/{{ $book->id }}">
      <div class="card m-2 p-3">
        <div class="card-head">
          {{ $book->name }}
        </div>
        <div class="card-body">
          price: {{ $book->price }}
        </div>
      </div>
    </a>
    @endforeach
  </div>
</div>
@endsection
