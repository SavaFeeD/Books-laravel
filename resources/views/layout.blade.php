<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Books</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>

      <nav class="nav">
        <ul>
          <li><a class="nav__item" href="/">Home</a></li>
          <li><a class="nav__item" href="/market">Books</a></li>
        </ul>
        <ul>
          <li><a class="nav__item" href="/login">Sing in</a></li>
          <li><a class="nav__item" href="/login/store">Sing up</a></li>
        </ul>
        
      </nav>

      <div class="container">
        @yield('content')
      </div>
    </body>
</html>

<style lang="scss">
.nav {
  display: flex;
  margin: 10px 0 0 0;
  justify-content: center;
  font-size: 20px;
}
.nav ul {
  display: flex;
}
.nav li {
  list-style: none;
}
.nav__item {
  margin: 0 0 0 20px;
  text-decoration: none;
}
</style>
