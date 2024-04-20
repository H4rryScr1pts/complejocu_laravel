<input type="hidden" name="id" value="{{$event->id ?? ""}}">
<fieldset>
  <legend>Datos del Evento</legend>
  <div>
    @error("picture")
      <p class="alerta error">La imágen del evento es requerida</p>
    @enderror
    <label for="name">Nombre del Evento</label>
    @error("name")
      <p class="alerta error">{{$message}}</p>
    @enderror
    <input 
      type="text" 
      id="name" 
      name="name" 
      placeholder="Nombre del Evento" 
      value="{{$event->name ?? old("name")}}"
    >
  </div>
  <div>
    <label for="descripction">Descripción del Evento</label>
    @error("description")
      <p class="alerta error">"{{$message}}"</p>
    @enderror
    <textarea 
      name="description" 
      id="description" 
      cols="30" 
      rows="10"
    >
    {{$event->description ?? old("description")}}
    </textarea>
  </div>
  <div>
    <input 
      type="hidden" 
      name="picture" 
      value="{{$event->picture ?? old("picture")}}"
    >
  </div>
  <div>
    <label for="places">Cantidad de lugares</label>
    @error("places")
      <p class="alerta error">{{$message}}</p>
    @enderror
    <input 
      type="number"
      name="places"
      id="places" 
      min="1" 
      value="{{$event->places ?? old("places")}}"
    >
  </div>
  <div>
    <label for="date">Fecha del Evento</label>
    @error("date")
      <p class="alerta error">{{$message}}</p>
    @enderror
    <input 
      type="date" 
      name="date" 
      id="date" 
      value="{{$event->date ?? old("date")}}"
    >
  </div>
</fieldset>
<fieldset>
  <legend>Datos Adicionales</legend>
  <div class="">
    <label for="">Lugar donde se ralizará el Evento</label>
    @error("place_id")
      <p class="alerta error">{{$message}}</p>
    @enderror
    <select name="place_id" id="place_id">
      <option 
        value="0" 
        disabled 
        selected
      > 
      -- Seleccione -- 
      </option>
      @foreach ($places as $place)
        <option 
          value="{{$place->id}}"
        >
        {{$place->name}}
        </option>
      @endforeach
    </select>
  </div>
  <div class="">
    <label for="">Organizador Encargado del Evento</label>
    @error("organizer_id")
      <p class="alerta error">{{$message}}</p>
    @enderror
    <select name="organizer_id" id="oganizar_id">
      <option value="0" disabled selected> -- Seleccione -- </option>
      @foreach ($organizers as $organizer)
        <option 
          value="{{$organizer->id}}"
          >
          {{$organizer->name . " " . $organizer->last_name}}
        </option>
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
  <div class="place-selector">

  </div>
</fieldset>