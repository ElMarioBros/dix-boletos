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
        <img src="https://i.ibb.co/HTKwV1S/nido.jpg">
        <img src="{{ asset('storage/' . $images->image_one) }}">
        <img src="{{ asset('storage/' . $images->image_two) }}">
        <img src="https://i.ibb.co/hMdvbgh/basico.jpg">
        <img src="https://i.ibb.co/brxD9Bg/mxl-pass.jpg">
        <img src="https://i.ibb.co/rfZ7y71/foraneo.jpg">
        <a href="{{ route('form') }}">
          <img src="https://i.ibb.co/SR7LHHp/ven.jpg">
        </a>
      </main>
  </body>
</html>