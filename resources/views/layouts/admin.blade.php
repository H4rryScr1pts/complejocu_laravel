@extends("app")
<header>
  <h1>Complejo Cultural</h1>
  <div>
    @auth
      <p>Hola: <span>{{auth()->user()->name . " " . auth()->user()->last_name}}</span></p>
      <form action="{{route("logout")}}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesión</button>
      </form>
    @endauth
  </div>
</header>
<div>
  <aside>
    <nav>
      <div class="admin-enlace">
        <a href="{{route("admin")}}">Inicio</a>
      </div>
      <div class="admin-enlace">
        <a href="{{route("admin.eventos")}}">Eventos</a>
      </div>
      <div class="admin-enlace">
        <a href="{{route("admin.organizadores")}}">Organizadores</a>
      </div>
      <div class="admin-enlace">
        <a href="#">Usuarios</a>
      </div>
      <div class="admin-enlace">
        <a href="{{route("admin.parking")}}">Estacionamiento</a>
      </div>
      <div class="admin-enlace">
        <a href="#">Perfil</a>
      </div>
    </nav>
  </aside>
  <main>
    @yield('admin-content')
  </main>
</div>