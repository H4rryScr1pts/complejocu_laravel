<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Complejo Cultural</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
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
    margin:0;
    padding: 0 10px;

  }
.content h1{
    text-align:center;
}
  .top-menu .company-name {
    font-weight: bold;
    font-size:25px;
  }

  .top-menu .user-name {
    text-align: center;
    flex-grow: 1;
    font-size:25px;
    font-weight:bold;
  }

  .top-menu .logout-button {
    text-decoration: none;
    color: #fff;
    padding: 5px 10px;
    border: 1px solid #fff;
    border-radius: 5px;
    font-weight:bold;
  }

  /* Segundo menú vertical */
  .side-menu {
    float: left;
    width: 100px;
    background-color: #f2f2f2;
    padding: 20px;
    height:100vh;
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
    margin-bottom: 50px;

  }

  .side-menu ul li a {
    text-decoration: none;
    color: #333;
font-weight:bold;

   
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
  .img{
    align:center;
    width: ;
  }

  }
</style>
</head>
<body>

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

</body>
</html>
