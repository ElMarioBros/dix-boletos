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
        <h3>Orden</h3>
        <b>
            @if ($entry->trashed())
                <a href="{{ route('completed') }}"> < Volver a la tabla</a>
            @else
                <a href="{{ route('table') }}"> < Volver a la tabla</a>
            @endif
        </b>
        <p><b>Cliente:</b> {{ $entry->name }}</p>
        <p><b>Celular: </b>{{ $entry->phone }}</p>
        <p><b>Correo: </b>{{ $entry->email }}</p>
        <p><b>Tickets Deseados: </b>{{ $entry->desired_tickets }}</p>
        <p><b>Ciudad: </b>{{ $entry->city }}</p>
        <p><b>Extras: </b>{{ $entry->extras }}</p>
        <p><b>Comentarios adicionales: </b>{{ $entry->comments }}</p>
        <br>
        <br>
        <br>
        <center>
            @if ($entry->trashed())
                <form action="{{ route('entries.restore', $entry->id) }}" method="POST">
                    @csrf
                    @method('PATCH') {{-- Use PATCH for restore action --}}
                    <button class="secondary">Reactivar Orden</button>
                </form>
            @else
                <form action="{{ route('entries.destroy', $entry->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Marcar Completado</button>
                </form>
            @endif
        </center>
    </main>
  </body>
</html>