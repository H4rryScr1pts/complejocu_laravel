
@extends('layouts.admin')
@section('titulo')
    Administración de Eventos
@endsection
@section('admin-content')
    <h1>Eventos</h1>
    @if (session("message"))
        <p class="alerta exito">{{session("message")}}</p>
    @endif
    
    <a class="my-button" href="{{route("admin.eventos")}}">Añadir Evento</a>
    <div>
        <table>
            <thead>
                <th>ID</th>
                <th>Evento</th>
                <th>Cupo</th>
                <th>Fecha</th>
                <th>Lugar</th>
                <th>Disponibles</th>
                <th>Organizador</th>
                <th>Estacionamiento</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <tr>
                    @foreach ($events as $event)
                        <td>{{$event->id}}</td>
                        <td>{{$event->name}}</td>
                        <td>{{$event->places}}</td>
                        <td>{{$event->date}}</td>
                        <td>{{$event->place->name}}</td>
                        <td>{{$event->availables}}</td>
                        <td>{{$event->organizer->name . " " . $event->organizer->last_name}}</td>
                        <td>{{$event->parking->name}}</td>
                        <td>
                           <div>
                               <div>
                                    <a href="{{route("admin.event.read", $event->id)}}">Visualizar</a>
                                    <a href="{{route("admin.event.edit", $event->id)}}">Editar</a>
                               </div>
                                <form action="{{route("admin.event.delete")}}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{$event->id}}" name="id">
                                    <input type="submit" value="Eliminar">
                                </form>
                           </div>
                        </td>
                    @endforeach
                </tr>
            </tbody>    
        </table>
    </div>
@endsection