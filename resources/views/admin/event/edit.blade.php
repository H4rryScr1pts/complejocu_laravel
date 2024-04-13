@extends('layouts.admin')
@section('titulo')
  Editar Evento {{$event->name}}
@endsection
@section('admin-content')
    <h1>Editar Evento: {{$event->name}}</h1>
    <div>
      <form 
        action="{{route("image.store")}}" 
        method="POST" 
        enctype="multipart/form-data" id="dropzone"
        class="dropzone"
      >
        @csrf
      </form>
    </div>
    <div>
      <form action="{{route("admin.event.pat")}}" method="POST">
        @csrf
        @include('admin.event.form')
        <input type="submit" value="Guardar Cambios">
      </form>
    </div>
@endsection