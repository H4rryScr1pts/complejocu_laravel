@extends('layouts.public')
@section('titulo')
  Iniciar Sesiíon
@endsection
@section('public-content')
  <div class="index-cabecera">
    <h1>Login</h1>
    <h2>Inicia Sesión con tus credenciales</h2>
  </div>
  <form class="formulario-login" method="post" action="{{route("login")}}">
    @if (session("message"))
        <p class="alerta error">{{session("message")}}</p>
    @endif
    @error('password')
      <p class="alerta error">{{$message}}</p>
    @enderror
    @error('email')
        <p class="alerta error">{{$message}}</p>
    @enderror
    @csrf
    <fieldset>
      <div class="campo">
        <label for="">E-mail</label>
        <input type="email" name="email" value="{{old("email")}}">
      </div>
      <div class="campo">
        <label for="">Password</label>
        <input type="password" name="password">
      </div>
      <div class="boton-guardar">
        <input type="submit" value="Iniciar Sesión" class="boton-azul">
      </div>
      <div class="login-enlace">
        <a href="{{route("registro")}}" class="e-1">¿No tienes cuenta? Crear una</a>
        <a href="/recuperar-password" class="e-2">¿Olvidaste tu password?</a>
      </div>
    </fieldset>
  </form>
@endsection