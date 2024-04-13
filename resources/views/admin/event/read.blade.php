@extends('layouts.admin')
@section('titulo')
  Evento {{$event->name}}
@endsection
@section('admin-content')
  <div>
    <a href="{{route("admin.eventos")}}">Volver</a>
    <div>
      <img src="{{asset('uploads') . '/' . $event->picture}}" alt="">
    </div>
    <div>
      <h2>{{$event->name}}</h2>
      <p>{{$event->description}}</p>
      <p>Fecha: {{$event->date}}</p>
      <p>Cantidad de lugares: {{$event->places}}</p>
      <p>lugares Disponibles: {{$event->availables}}</p>
      <h3>Información Adicional</h3>
      <p>Lugar del Evento: {{$event->place->name}}</p>
      <p>Encargado del Evento: {{$event->organizer->name . " " . $event->organizer->last_name}}</p>
      <p>Estacionamiento asigando al Evento: {{$event->parking->name}}</p>
    </div>
  </div>
@endsection