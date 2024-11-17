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
      <main class="container" style="max-width:750px;">
        <nav>
            <ul>
              <li><strong>Fabulous Ticket</strong></li>
            </ul>
            <ul>
              <li><a href="{{ route('table') }}">Ordenes Activas</a></li>
              <li><a href="{{ route('completed') }}">Ordenes Completadas</a></li>
              <li><a href="{{ route('admin.image') }}">Imagenes</a></li>
            </ul>
        </nav>
        <h1>Admin Panel</h1>
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <hr>
        <form action="{{ route('admin.images.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>Jardin Izquierdo</h2>
                <center>
                    <img style="max-height: 350px" src="{{ asset('storage/' . $images->image_one) }}" />
                </center>
                <input type="file" name="image_one" id="image_one">
            </div>
            <hr/>
            <div>
                <h2>Jardin Derecho</h2>
                <center>
                    <img style="max-height: 350px" src="{{ asset('storage/' . $images->image_two) }}" />
                </center>
                <input type="file" name="image_two" id="image_two">
            </div>
            <button type="submit">Save Images</button>
        </form>
    </main>
  </body>
</html>
