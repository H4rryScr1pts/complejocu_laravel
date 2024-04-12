@extends('layouts.admin')
@section('titulo')
    Administración de Eventos
@endsection
@section('admin-content')
    <h1>Eventos</h1>
    <div>
        <a href="{{route("admin.eventos.create")}}">Añadir Evento</a>
    </div>
@endsection