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
  </div>
  <!--Dashboard aquí -->
  </div>
  <main>
    @yield('admin-content')
  </main>
</div>
<body class="dashboard">
  <div class="dashboard__grid">
    <aside class="dashboard__sidebar">
  <nav class="dashboard__menu">
    <a href="{{route("admin")}}" class="dashboard__enlace dashboard__enlace--actual">
      <i class="fa-solid fa-house dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Inicio
      </span>
    </a>
    <a href="{{route("admin.eventos")}}" class="dashboard__enlace ">
      <i class="fa-solid fa-calendar dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Eventos
      </span>
    </a>
    <a href="{{route("admin.organizadores")}}" class="dashboard__enlace ">
      <i class="fa-solid fa-users dashboard__icono"></i>
      <span class="dashboard__menu-texto">
        Organizadores 
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