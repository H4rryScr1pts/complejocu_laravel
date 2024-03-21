@extends('layouts.admin')
@section('titulo')
    Administración de Organizadores
@endsection
@section('admin-content')
    <h1>Organizadores</h1>
    <div>
        <a href="{{route("admin.organizadores.create")}}">Añadir Organizador</a>
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
    <table>
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
                    <td>
                        <div>
                            <a href="{{route("admin.organizadores.edit", $organizer->id)}}">Editar</a>
                            <form action="{{route("admin.organizadores.delete")}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$organizer->id}}">
                                <input type="submit" value="Eliminar">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
@endsection