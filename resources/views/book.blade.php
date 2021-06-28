@extends('layout')

@section('content')
<div>
  <h1>{{ $book->name }}</h1>
  <ul>
    <li>author: {{ $book->author }}</li>
  </ul>
</div>
@endsection
