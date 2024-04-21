@extends('layouts.admin')
@section('titilo')
    Estacionamiento
@endsection
@section('admin-content')
    <div class="admin-container">
        <h1>Reportes de Estacionamiento</h1>
        <div class="filtros">
        </div>
        <div class="tablas-reportes">
            <div class="tabla-reporte admin-sombra">
                <h2>Estacionamiento A</h2>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Cajon</th>
                        <th>Estado</th>
                    </thead>  
                    <tbody>
                        @foreach ($drawersA as $drawerA)
                            <tr>
                                <td>{{$drawerA->id}}</td>
                                <td>{{$drawerA->nombre}}</td>
                                <td>{{$drawerA->estatus}}</td>
                            </tr>
                        @endforeach
                    </tbody>  
                </table>
            </div>
            <div class="tabla-reporte admin-sombra">
                <h2>Estacionamiento B</h2>
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Cajon</th>
                        <th>Estado</th>
                    </thead>  
                    <tbody>
                        <tr>
                            @foreach ($drawersB as $drawerB)
                                <tr>
                                    <td>{{$drawerB->id}}</td>
                                    <td>{{$drawerB->nombre}}</td>
                                    <td>{{$drawerB->estatus}}</td>
                                </tr>
                            @endforeach
                        </tr>
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
@endsection