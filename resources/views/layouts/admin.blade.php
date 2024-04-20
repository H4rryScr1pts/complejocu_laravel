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
  <li>
    <a 
      href="{{route("admin")}}">
      <center>
        <img src="{{asset("build/img/inicio.png")}}" >
        <br> Inicio
    </a>
  </li>
  <li>
    <a 
      href="{{route("admin.eventos")}}">
          <Center>
            <img src="{{asset("build/img/eventos.png")}}" >
            <br> Eventos
      </a>
    </li>
      <li>
        <a 
          href="{{route("admin.organizadores")}}">
          <center>
            <img src="{{asset("build/img/organizadores.png")}}">
            <br> Organizadores
        </a>
      </li>
      <li>
        <a 
          href="{{route("users.index")}}">
          
          <center>
            <img src="{{asset("build/img/usuarios.png")}}">
            <br> Usuarios
        </a>
      </li>
      <li>
        <a 
          href="{{route("admin.parking")}}">
          <center>
            <img src="{{asset("build/img/reportes.png")}}" >
            <br> Reportes
        </a>
      </li>
      <li>
        <a 
          href="{{route("admin.parking")}}">
          <center>
            <img src="{{asset("build/img/perfil.png")}}" >
            <br> Perfil
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
