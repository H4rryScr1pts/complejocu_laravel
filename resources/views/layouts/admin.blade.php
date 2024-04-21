@extends('app')
@section("admin")
<div class="container">
  <!-- Primer menú horizontal -->
  <div class="top-menu">
    <div class="company-name">Complejo Cultural</div>
    <div class="user-name">Hola: {{auth()->user()->name . " ". auth()->user()->last_name}}</div>
    <a href="{{route("location")}}" class="logout-button">Cerrar Sesión</a>
  </div>
  <!-- Segundo menú vertical -->
  <div class="side-menu">
<ul>
  <!-- Imagenes-->
  <li class="{{$page === 'home' ? 'active' : ''}}">
    <a 
      href="{{route("admin")}}" class="{{$page == 'home' ? 'active' : ''}}">
      <center>
        <i class="fa fa-home"></i>
        <br> Inicio
    </a>
  </li>
  <li class="{{$page === 'event' ? 'active' : ''}}">
    <a 
      href="{{route("admin.eventos")}}" class="{{$page === 'event' ? 'active' : ''}}">
          <Center>
            <i class="fa-solid fa-calendar"></i>
            <br> Eventos
      </a>
    </li>
      <li class="{{$page === 'organizer' ? 'active' : ''}}">
        <a 
          href="{{route("admin.organizadores")}}" class="{{$page === 'organizer' ? 'active' : ''}}">
          <center>
            <i class="fa-solid fa-user-tie"></i>
            <br> Organizadores
        </a>
      </li>
      <li class="{{$page === 'user' ? 'active' : ''}}">
        <a 
          href="{{route("users.index")}}" class="{{$page === 'user' ? 'active' : ''}}">
          
          <center>
            <i class="fa-solid fa-users"></i>
            <br> Usuarios
        </a>
      </li>
      <li class="{{$page === 'report' ? 'active' : ''}}">
        <a 
          href="{{route("admin.parking")}}" class="{{$page === 'report' ? 'active' : ''}}">
          <center>
            <i class="fa-solid fa-clipboard"></i>
            <br> Reportes
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="admin-content-padding">
   @yield("admin-content")<!-- Contenido de la página aquí -->
</div>
</div>
@endsection
