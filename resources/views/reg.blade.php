@extends('layout')

@section('content')

<div>
  <h1>Регистрация</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if($message)
    <div class="alert alert-danger">
      <ul>
        <li>{{ $message }}</li>
      </ul>
    </div>
  @endif

  <form class="form" action="/login/store" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" class="form-control m-2" required>
    <input type="email" name="email" placeholder="email" class="form-control m-2" required>
    <input type="password" name="password1" placeholder="password" class="form-control m-2" required>
    <input type="password" name="password2" placeholder="accept password" class="form-control m-2" required>
    <button type="submit" class="btn btn-success m-2">Отправить</button>
  </form>
</div>

@endsection
