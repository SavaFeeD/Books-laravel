@extends('layout')

@section('content')

<div>
  <h1>Авторизация</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if(!$user)
    <div class="alert alert-danger">
      <ul>
        <li>Почта или пароль указаны неправильны</li>
      </ul>
    </div>
  @endif

  <form class="form" action="/login" method="post">
    @csrf
    <input type="email" name="email" placeholder="email" class="form-control m-2" required>
    <input type="password" name="password" placeholder="password" class="form-control m-2" required>
    <button type="submit" class="btn btn-success m-2">Отправить</button>
  </form>
</div>

@endsection
