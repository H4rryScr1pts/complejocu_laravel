@extends('layouts.public')
@section('titulo')
    Eventos
@endsection
@section('public-content')
<div class="index-cabecera">
  <h1>Eventos</h1>
  <h2>¡Acompañanos en nuestros proximos eventos!</h2>
  <div class="listado-eventos">
    @foreach ($events as $event)
      <div class="evento">
        <div class="evento-foto">
          <img src="{{asset("uploads" . "/" . $event->picture)}}" alt="imagen-evento">
          <div class="evento-titulo">
            <h1><?php echo $event->name?></h1>
          </div>
        </div>
        <div class="evento-info">
          <p class="evento-fecha"><?php echo $event->date?></p>
          <p><?php echo $event->description?></p>
          <p>Lugares disponibles: <?php echo $event->places?></p>
        </div>
        <div class="evento-boton">
          <a href="{{route("event", $event->id)}}" class="boton-azul-block">Ver Evento</a>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection