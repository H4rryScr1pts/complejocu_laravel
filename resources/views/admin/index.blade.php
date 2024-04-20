@extends('layouts.admin')
@section('titulo')
    Dashboard
@endsection
@section('admin-content')
    <h1>Panel de Administración</h1>
    <div>
        <div>
          <div>
            <h1>Eventos</h1>
          </div>
          <div>
            <h2>Organizadores</h2>
          </div>
        </div>
        <div>
          <div>
            <canvas id="myChart" width="400" height="400"></canvas>
          </div>
          <div>
            <h1>Grafica EB</h1>
          </div>
        </div>
      </div>
@endsection