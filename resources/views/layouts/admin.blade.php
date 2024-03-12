@extends("app")
<header>
  <h1>Complejo Cultural</h1>
  <a href="">Cerrar Sesión</a>
</header>
<div>
  <aside>
    <nav>
      <div class="admin-enlace">
        <a href="#">Inicio</a>
      </div>
      <div class="admin-enlace">
        <a href="#">Eventos</a>
      </div>
      <div class="admin-enlace">
        <a href="#">Organizadores</a>
      </div>
      <div class="admin-enlace">
        <a href="#">Usuarios</a>
      </div>
      <div class="admin-enlace">
        <a href="#">Estacionamiento</a>
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