@extends("app")
<div class="page-header">
  <div class="logo">
  <h1>Complejo Cultural</h1></div>
  <div class="saludo">
    @auth
      <p>Hola: <span>{{auth()->user()->name . " " . auth()->user()->last_name}}</span></p>
      <form action="{{route("logout")}}" method="POST"></div>
        @csrf
        <button class="button" type="submit">Cerrar Sesión</button>
      </form>
    @endauth
  </div></div>
  <main>
    @yield('admin-content')
  </main>
</div>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/build/css/app.css">
</head>
<body class="dashboard">
  <div class="dashboard__grid">
    <aside class="dashboard__sidebar">
  <nav class="dashboard__menu">
    <a href="/admin/dashboard" class="dashboard__enlace dashboard__enlace--actual">
      <i class="fa-solid fa-house dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Inicio
      </span>
    </a>
    <a href="/admin/eventos" class="dashboard__enlace ">
      <i class="fa-solid fa-calendar dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Eventos
      </span>
    </a>
    <a href="/admin/registrados" class="dashboard__enlace ">
      <i class="fa-solid fa-users dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Usuarios
      </span>
    </a>
    <a href="/admin/perfil" class="dashboard__enlace ">
      <i class="fa-solid fa-user dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Perfil
      </span>
    </a>
  </nav>
</aside> 
  </div>
  <script src="/build/js/bundle.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>