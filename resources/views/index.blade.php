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
    <center>
      <img src="https://i.ibb.co/DKwsFRY/header.jpg"/>
    </center>
    <main class="container" style="max-width:700px;">
      <form action="{{ route('entry.store') }}" method="POST">
        @csrf
        <fieldset>
          <label>
            Nombre
            <input
              name="name"
              placeholder="Ej. Juan Gonzalez"
              autocomplete="given-name"
              required
            />
          </label>
          <label>
            Correo Electrónico
            <input
              type="email"
              name="email"
              placeholder="Ej. nombre@mail.com"
              autocomplete="email"
              required
            />
          </label>
          <label>
            Número de teléfono
            <input
              name="phone"
              placeholder="Ej. 6865551234"
              autocomplete="given-name"
              required
            />
          </label>
          <label> Número de Boletos Deseados
            <input type="number" name="desired_tickets" aria-label="Number" required>
          </label>
          <label>
            Ciudad de residencia
            <select name="city" aria-label="Seleccione su Ciudad..." required>
            <option selected disabled value="">
              Seleccione su ciudad...
            </option>
            <option value="Tijuana">Tijuana</option>
            <option value="Mexicali">Mexicali</option>
            <option value="Ensenada">Ensenada</option>
            <option value="Puerto Peñasco">Puerto Peñasco</option>
          </select>
          </label>
          <fieldset>
          <legend>Amenidades y Extras (Opcional)</legend>
          <label>
            <input type="checkbox" name="extras[]" value="Hospedaje" />
            Hospedaje
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Traslado a Mexicali" />
            Traslado a Mexicali
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Estacionamiento" />
            Estacionamiento
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Traslado al estadio" />
            Traslado al estadio
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Evento Final" />
            Evento Final
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Kit Dix Caribe" />
            Kit Dix Caribe
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Camisetas Dix" />
            Camisetas Dix
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Chamarra Dix Caribe" />
            Chamarra Dix Caribe
          </label>
          <label>
            <input type="checkbox" name="extras[]" value="Bandera" />
            Bandera
          </label>
        </fieldset>
          <label>
          Comentarios Adicionales (Opcional)
          <textarea
            name="comments"
            placeholder="Preguntas específicas o peticiones especiales"
            aria-label="Professional short bio"
          ></textarea>
          </label>
        </fieldset>

        <input
          type="submit"
          value="Enviar"
        />
      </form>
    </main>
  </body>
</html>
