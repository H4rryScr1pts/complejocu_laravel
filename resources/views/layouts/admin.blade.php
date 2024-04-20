@extends('app')
@section("style")
  <style>
  .my-button {
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.my-button:hover {
    background-color: #0056b3;
}

.container {
    margin: 0 auto;
    padding: 0px;
}

/* Primer menú horizontal */
.top-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: blue;
    color: #fff;
    height: 60px;
    margin: 0;
    padding: 0 10px;
}
.content h1 {
    text-align: center;
}
.top-menu .company-name {
    font-weight: bold;
    font-size: 25px;
}

.top-menu .user-name {
    text-align: center;
    flex-grow: 1;
    font-size: 25px;
    font-weight: bold;
}

.top-menu .logout-button {
    text-decoration: none;
    color: #fff;
    padding: 5px 10px;
    border: 1px solid #fff;
    border-radius: 5px;
    font-weight: bold;
}

/* Segundo menú vertical */
.side-menu {
    float: left;
    width: 100px;
    background-color: #f2f2f2;
    padding: 20px;
    height: 100vh;
}

.side-menu h2 {
    text-align: center;
    margin-bottom: 10px;
}

.side-menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.side-menu ul li {
    margin-bottom: 20px;
}

.side-menu ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

/* Estilos responsivos */
@media screen and (max-width: 768px) {
    .container {
        padding: 20px;
    }

    .side-menu {
        float: none;
        width: 100%;
    }
    .content {
        margin-left: 220px; /* Ancho de la barra lateral más un poco de margen */
        padding: 20px;
    }

  }
img {
  aling: center;
}
  
</style>
@endsection
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
<div class="content">
   @yield("admin-content")<!-- Contenido de la página aquí -->
  </div>
</div>
@endsection
