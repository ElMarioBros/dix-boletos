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
        <br/>
        <h2>Ordenes Completadas</h2>
        <table>
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Celular</th>
                <th scope="col">Correo</th>
                <th scope="col">Ver</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                    <tr>
                        <th scope="row">{{ $entry->name }}</th>
                        <td>{{ $entry->phone }}</td>
                        <td>{{ $entry->email }}</td>
                        <td><a href="{{ route('show', $entry) }}">Ver</a></td>
                    </tr>
                @endforeach
            </tfoot>
          </table>
    </main>
  </body>
</html>