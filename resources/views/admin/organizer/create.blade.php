@extends('layouts.admin')
@section('titulo')
    Crear Nuevo Organizador
@endsection
@section('admin-content')
    <div class="admin-container">
      <h1>Crear Nuevo Organizador</h1>
      <a class="admin-button" href="{{route("admin.organizadores")}}">Volver</a>
      <form class="admin-form" action="{{route("admin.organizadores.create")}}" method="POST">
        @csrf
        @include('admin.organizer.form')
        <input type="submit" class="admin-button" value="Guardar Organizador">
      </form>
    </div>
@endsection