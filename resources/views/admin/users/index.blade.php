@extends('layouts.admin')
@section('titulo')
    Administración de Usuarios
@endsection
@section('admin-content')
    <div class="admin-container">
        <h1>Usuarios</h1>
        @if ($users)
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
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->telephone}}</td>
                        <td>{{$user->email}}</td>
                        <td class="">
                            <div class="actions-buttons">
                                <a class="action-button delete-button" href="">
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