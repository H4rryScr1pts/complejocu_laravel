@extends('app')
@section('public')
<header class="inicio-header">
  <div class="header-1">
    <a href="{{route("registro")}}">Registrarme</a>
    <a href="{{route("login")}}">Iniciar Sesión</a>
  </div>
</header>
<nav class="navegacion">
  <div class="header-logo">
    <a href="{{route("/")}}"> 
      <h2> Complejo Cultural<h2>
    </a>
  </div>
  <div class="btn-resp">
    <img src="/build/img/barras.svg" alt="boton-response">
  </div>
  <div class="navegacion-enlaces">
    <a href="{{route("about")}}" id="navegacion-enlace1">Nosotros</a>
    <a href="{{route("services")}}" id="navegacion-enlace2">Servicios</a>
    <a href="{{route("events")}}" id="navegacion-enlace3">Eventos</a>
    <a href="{{route("location")}}" id="navegacion-enlace4">Ubicación</a>
    <a href="{{route("contact")}}" id="navegacion-enlace5">Contacto</a>
  </div>
</nav>
  @yield('public-content')
  <footer class="footer bg-2">
    <div class="footer-1">
      <div class="footer-logo">
        <a href="/">
          <h1>Complejo cultural</h1>
        </a>
      </div>
      <div class="redes-s">
        <div class="redes-enlace">
          <a href="https://www.facebook.com/pages/Complejo-Cultural-Universitario-BUAP/398404573521634">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="30"
              height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eeee" fill="#eee" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg>
          </a>
        </div>
        <div class="redes-enlace">
          <a href="https://www.instagram.com/buapoficial/">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="30"
              height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
              <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
              <path d="M16.5 7.5l0 .01" />
            </svg>
          </a>
        </div>
        <div class="redes-enlace">
          <a href="https://www.youtube.com/@BUAPoficial">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube" width="30"
              height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
              <path d="M10 9l5 3l-5 3z" />
            </svg>
          </a>
        </div>
        <div class="redes-enlace">
          <a href="/">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter" width="30"
              height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#eee" fill="#eee" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" />
            </svg>
          </a>
        </div>
        <div class="redes-enlace">
          <a href="https://www.tiktok.com/@buap_oficial">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-tiktok" width="30"
              height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="#eee" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="footer-texto">
      <p>El complejo cultural es un sitio donde puedes asistir a maravillosos eventos y disfrutar de la diversión y
        genialidad que bridna este lugar.</p>
    </div>
    <div class="footer-2">
      <p>Complejo Cultural. Vía Atlixcáyotl 2299 Puebla, Pue. Cp 72810 Teléfono: 2222295503. <?php echo date("Y")?>.
        &copy;</p>
    </div>
  </footer>
@endsection