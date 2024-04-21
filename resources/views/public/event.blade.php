@extends("layouts.public")
@section('public-content')
<div class="index-cabecera">
  <h1>{{$event->name}}</h1>
</div>
<div class="evento-vista">
  <div class="evento-vista-foto">
    <img src="{{asset("uploads" . "/" . $event->picture)}}" alt="Evento-imagen">
  </div>
  <div class="evento-vista-info">
    <p>{{$event->description}}</p><br>
    <p>Fecha del Evento: <span>{{$event->date}}</span></p>
    <br><hr>
    <div class="eventos-acciones">
      <a href="{{route("events")}}" class="boton-verde">Volver</a>
      <a href="{{route("login")}}" class="boton-azul">Asistir al evento</a>
    </div>
  </div>
</div>
@endsection