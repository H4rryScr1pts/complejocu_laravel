@extends('layouts.admin')
@section('titulo')
    Administración de Organizadores
@endsection
@section('admin-content')
    <div class="admin-container">
        <h1>Organizadores</h1>
        <div>
            <a class="admin-button" href="{{route("admin.organizadores.create")}}">Añadir Organizador</a>
        </div>
        @if (session("message"))
            <p class="alerta exito">{{session("message")}}</p>
        @endif
        @if (session("message-edit"))
            <p class="alerta exito">{{session("message-edit")}}</p>
        @endif
        @if (session("message-delete"))
            <p class="alerta exito">{{session("message-delete")}}</p>
        @endif
        @if ($organizers)
        <table class="table admin-sombra">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($organizers as $organizer)
                    <tr>
                        <td>{{$organizer->id}}</td>
                        <td>{{$organizer->name}}</td>
                        <td>{{$organizer->last_name}}</td>
                        <td>{{$organizer->telephone}}</td>
                        <td>{{$organizer->email}}</td>
                        <td class="">
                            <div class="actions-buttons">
                                <a class="action-button edit-button" href="{{route("admin.organizadores.edit", $organizer->id)}}">
                                    <i class="fas fa-edit"></i>Editar
                                </a>
                                <a class="action-button delete-button" href="{{route("admin.organizadores.delete", $organizer->id)}}">
                                    <i class="fas fa-trash-alt"></i>Eliminar
                                <a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
@endsection