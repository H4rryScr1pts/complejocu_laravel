@extends('layouts.public')
@section('titulo')
    Sobre Nosotros
@endsection
@section('public-content')
<div class="index-cabecera">
  <h1>Sobre Nosotros</h1>
  <h2>Conoce todo lo necesario sobre nosotros</h2>
</div>
<div class="nosotros-main">
  <div class="nosotros-imagen">
    <img src="/build/img/lugar2.jpg" alt="Imagen-CCU">
  </div>
  <div class="nosotros-texto">
    <p>El Complejo Cultural Universitario fue inaugurado el día 10 de Noviembre de 2008, como un conjunto de espacios
      arquitectónicos y plazuelas interactivas, respondiendo al compromiso que la universidad pública nacional tiene
      para con la sociedad que la nutre y le da vida. Fue concebido y construido como una ventana abierta para la
      promoción de todas las expresiones culturales, artísticas, científicas y tecnológicas, que nuestra institución
      genera, y como sede de las mismas expresiones que concurren hacia nosotros como resultado de los convenios con
      otras instituciones del país y el resto del mundo.
    </p>
  </div>
</div>
@include('public.icons')
@endsection