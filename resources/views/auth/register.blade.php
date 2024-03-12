@extends('layouts.public')
@section('titulo')
    Crear Cuenta
@endsection
@section('public-content')  
    <h1>Crea tu Cuenta en Complejo Cultural</h1>
    <div>
      <form class="singin-form" action="{{route("registro")}}" method="post">
        @csrf
          <fieldset>
            <legend>Datos personales</legend>
            <div class="campo">
              <label for="name">Nombre</label>
              <input type="text" id="name" name="name" value="{{old("name") ?? null}}" placeholder="Tu Nombre" 
              class="@error("name")
                input-error
              @enderror">
              @error("name")
                <p class="alerta error">{{$message}}</p>
              @enderror
            </div>
            <div class="campo">
              <label for="last_name">Apellido</label>
              <input type="text" id="last_name" name="last_name" value="{{old("last_name") ?? null}}" placeholder="Tu Apellido">
              @error("last_name")
                <p class="alerta error">{{$message}}</p>
              @enderror
            </div>
            <div class="campo">
              <label for="telephone">Número de teléfono</label>
              <input type="tel" id="telephone" name="telephone" value="{{old("telephone") ?? null}}" placeholder="0000000000">
              @error("telephone")
                <p class="alerta error">{{$message}}</p>
              @enderror
            </div>
          </fieldset>
          <fieldset>
            <legend>Datos de la cuenta</legend>
            <div class="campo">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" value="{{old("email") ?? null}}" placeholder="Tu e-mail">
              @error("email")
                <p class="alerta error">{{$message}}</p>
              @enderror
            </div>
            <div class="campo">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Min. 8 caracteres">
              @error("password")
                <p class="alerta error">{{$message}}</p>
              @enderror
            </div>
            <div class="campo">
              <label for="password_confirmation">Confirma tu password</label>
              <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirma tu Password">
            </div>
          </fieldset>
          <div class="formulario-acciones">
            <a href="{{route("login")}}">¿Ya tienes una cuenta? Iniciar Sesión</a>
            <div class="boton-guardar">
              <input type="submit" value="Crear cuenta" class="boton-azul">
            </div>
          </div>
        </form>
    </div>
@endsection
