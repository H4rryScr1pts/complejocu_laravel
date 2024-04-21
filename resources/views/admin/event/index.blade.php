@extends('layouts.admin')
@section('titulo')
    Administración de Eventos
@endsection
@section('admin-content')
    <div class="admin-container">
        <h1>Eventos</h1>
        <div>
            <a class="admin-button" href="{{route("admin.eventos.create")}}">Añadir Evento</a>
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
        @if ($events)
        <table class="table admin-sombra">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Cupo</th>
                <th>Lugar</th>
                <th>Organizador</th>
                <th>Estacionamento</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{$event->id}}</td>
                        <td>{{$event->name}}</td>
                        <td>{{$event->date}}</td>
                        <td>{{$event->places}}</td>
                        <td>{{$event->place->name}}</td>
                        <td>{{$event->parking->name}}</td>
                        <td>{{$event->organizer->name . " " . $event->organizer->last_name}}</td>
                        <td class="">
                            <div class="actions-buttons">
                                <a href="{{route("admin.event.read", $event->id)}}" class="action-button view-button"><i class="fas fa-eye"></i>Ver</a>
                                <a class="action-button edit-button" href="{{route("admin.event.edit", $event->id)}}">
                                    <i class="fas fa-edit"></i>Editar
                                </a>
                                <a class="action-button delete-button" href="{{route("admin.event.delete", $event->id)}}">
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