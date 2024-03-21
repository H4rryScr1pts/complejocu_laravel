@extends('layouts.admin')
@section('titulo')
    Editar a {{$organizer->name . " " . $organizer->last_name}}
@endsection
@section('admin-content')
    <h1>Editar a {{$organizer->name . " " . $organizer->last_name}}</h1>
    <a href="{{route("admin.organizadores")}}">Volver</a>
    <form action="{{route("admin.organizadores.edit.store")}}" method="POST">
      @csrf
      @include('admin.organizer.form')
      <input type="submit" value="Guardar Cambios">
    </form>
@endsection