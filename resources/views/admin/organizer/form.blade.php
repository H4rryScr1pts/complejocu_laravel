<input type="hidden" name="id" value="{{$organizer->id ?? ""}}">
<div>
  <label for="name">Nombre</label>
  @error("name")
    <p class="alerta error">{{$message}}</p>
  @enderror
  <input 
    type="text" 
    name="name" 
    id="name" 
    placeholder="Nombre del Organizador" 
    value="{{$organizer->name ?? old("name")}}">
</div>
<div>
  <label for="last_name">Apellido</label>
  @error("last_name")
    <p class="alerta error">{{$message}}</p>
  @enderror
  <input 
    type="text" 
    name="last_name" 
    id="last_name" 
    placeholder="Apllido del Organizador" 
    value="{{$organizer->last_name ?? old("last_name")}}">
</div>
<div>
  <label for="telephone">Telefono</label>
  @error("telephone")
    <p class="alerta error">{{$message}}</p>
  @enderror
  <input 
    type="tel" 
    name="telephone" 
    id="telephone" 
    placeholder="No° de teléfono del Organizador" 
    value="{{$organizer->telephone ?? old("telephone")}}">
</div>
<div>
  <label for="email">Correo Electrónico</label>
  @error("email")
    <p class="alerta error">{{$message}}</p>
  @enderror
  <input 
    type="email" 
    name="email" 
    id="email" 
    placeholder="Correo electrónico del Organizador" 
    value="{{$organizer->email ?? old("email")}}">
</div>