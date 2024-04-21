@extends('layouts.admin')
@section('titulo')
    Administración de Eventos
@endsection
@section('admin-content')
    <div class="admin-container">
      <h1>Crear Evento</h1>
      <div>
        <a class="admin-button" href="{{route("admin.eventos")}}">Volver</a>
      </div>
      <div class="admin-forms">
        <form action="{{route("image.store")}}" method="POST" class="dropzone form-dropzone admin-sombra" enctype="multipart/form-data" id="dropzone">
          @csrf
        </form>
        <div>
          <form class="admin-form-event admin-sombra" action="{{route("admin.event.store")}}" method="POST">
            @csrf
            @include('admin.event.form')
            <input class="admin-button" type="submit" value="Guardar Evento">
          </form>
        </div>
      </div>
    </div>
@endsection