@extends('layouts.admin')
@section('titulo')
    Administración de Eventos
@endsection
@section('admin-content')
    <h1>Crear Evento</h1>
    <div>
      <a href="{{route("admin.eventos")}}">Volver</a>
    </div>
    <div>
      <form action="{{route("image.store")}}" method="POST" class="dropzone" enctype="multipart/form-data" id="dropzone">
        @csrf
      </form>
      <div>
        <form action="{{route("admin.event.store")}}" method="POST">
          @csrf
          @include('admin.event.form')
          <input type="submit" value="Guardar Evento">
        </form>
      </div>
    </div>
@endsection