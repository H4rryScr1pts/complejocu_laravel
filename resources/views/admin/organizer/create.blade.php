@extends('layouts.admin')
@section('titulo')
    Crear Nuevo Organizador
@endsection
@section('admin-content')
    <h1>Crear Nuevo Organizador</h1>
    <a href="{{route("admin.organizadores")}}">Volver</a>
    <form action="{{route("admin.organizadores.create")}}" method="POST">
      @csrf
      @include('admin.organizer.form')
      <input type="submit" value="Guardar Organizador">
    </form>
@endsection