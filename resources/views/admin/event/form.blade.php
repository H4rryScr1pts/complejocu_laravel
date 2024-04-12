<fieldset>
  <legend>Datos del Evento</legend>
  <div>
    <label for="name">Nombre del Evento</label>
    <input type="text" id="name" name="name" placeholder="Nombre del Evento">
  </div>
  <div>
    <label for="descripction">Descripción del Evento</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
  </div>
  <div>
    <input type="hidden" name="picture" value="{{old("imagen")}}">
  </div>
  <div>
    <label for="places">Cantidad de lugares</label>
    <input type="number" name="places" id="places" min="1">
  </div>
  <div>
    <label for="date">Fecha del Evento</label>
    <input type="date" name="date" id="date">
  </div>
</fieldset>
<fieldset>
  <legend>Datos Adicionales</legend>
  <div class="">
    <label for="">Lugar donde se ralizará el Evento</label>
    <select name="place" id="place">
      <option value="0" disabled selected> -- Seleccione -- </option>
      @foreach ($places as $place)
        <option value="{{$place->id}}">{{$place->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="">
    <label for="">Organizador Encargado del Evento</label>
    <select name="organizer_id" id="oganizar_id">
      <option value="0" disabled selected> -- Seleccione -- </option>
      @foreach ($organizers as $organizer)
        <option value="{{$organizer->id}}">{{$organizer->name . " " . $organizer->last_name}}</option>
      @endforeach
    </select>
  </div>
</fieldset>
<fieldset>
  <legend>Datos de Estacionamiento (Opcional)</legend>
  <label for="parking_id">Seleccionar Estacionamiento</label>
  <select name="parking_id" id="parking_id">
    <option value="0" disabled selected> -- Seleccione -- </option>
    @foreach ($parkings as $parking)
      @if ($parking->availables !== 0)
        <option value="{{$parking->id}}">
          <div>
            <p>{{$parking->name}}</p>
            <p>| Cajones Disponibles: {{$parking->availables}}</p>
          </div>
        </option>
      @else
        <option value="0" disabled>
          <p>{{$parking->name}}</p>
          <p>| Sin Cajones Disponibles</p>
        </option>
      @endif
    @endforeach
  </select>
  <div class="place-selector"></div>
</fieldset>