<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <title>Hello world!</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
  </head>
  <body>
    <main class="container">
      <h1>{{$titulo}}</h1>
      @include('stayflow.menu')
      @yield('content')
    </main>
  </body>
</html>