<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
    <title>Fabulous Ticket</title>
  </head>
  <body>
      <main class="container" style="max-width:700px;">
        <a href="{{ route('form') }}">
          <img src="{{ asset('images/1.jpg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/2.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/3.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/4.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/5.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('storage/' . $images->image_one) }}">
        </a>
        <a href="{{ route('form') }}">
          <img src="{{ asset('storage/' . $images->image_two) }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/8.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/9.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/10.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/11.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/12.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/13.jpeg') }}">
        </a>

        <a href="{{ route('form') }}">
          <img src="{{ asset('images/14.jpeg') }}">
            </a>
      </main>
  </body>
</html>