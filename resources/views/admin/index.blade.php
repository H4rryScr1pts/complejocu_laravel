@extends('layouts.admin')
@section('titulo')
    Dashboard
@endsection
@section('admin-content')
  <h1>Panel de Administración</h1>
  <div class="admin-secciones">
    <div class="admin-intro">
      <div class="admin-intro-element admin-sombra">
        <h1>Proximos Eventos</h1>
        @foreach ($events as $event)
          <p>{{$event->name . " - " . $event->date}}</p>
        @endforeach
      </div>
      <div class="admin-intro-element admin-sombra">
        <h1>Organizadores</h1>
        @foreach ($organizers as $organizer)
          <p>{{$organizer->name . " " . $organizer->last_name}}</p>
        @endforeach
      </div>
    </div>
    <div class="graficas">
      <div class="grafica admin-sombra">
        <h1>Estacionamiento A</h1>
        <canvas id="graficaEstacionamiento1" class="" width="300" height="300"></canvas>
      </div>
      <div class="grafica admin-sombra">
        <h1>Estacionamiento B</h1>
        <canvas id="graficaEstacionamiento2" width="300" height="300"></canvas>
      </div>
    </div>
  </div>
@endsection
      <script>
        fetch('/api/parking')
            .then(response => response.json())
            .then(data => {
              try {
                console.log(data);
                  data.parkings.forEach((estacionamiento, index) => {
                      var ctx = document.getElementById(`graficaEstacionamiento${index + 1}`).getContext('2d');
  
                      var disponibles = estacionamiento.availables;
                      var totales = estacionamiento.num_places;
  
                      var myChart = new Chart(ctx, {
                          type: 'doughnut',
                          data: {
                              labels: ['Espacios Disponibles', 'Espacios Ocupados'],
                              datasets: [{
                                  label: `Estacionamiento ${index + 1}`,
                                  data: [disponibles, totales - disponibles],
                                  backgroundColor: [
                                      'rgba(75, 192, 192, 0.5)',
                                      'rgba(255, 99, 132, 0.5)'
                                  ],
                                  borderColor: [
                                      'rgba(75, 192, 192, 1)',
                                      'rgba(255, 99, 132, 1)'
                                  ],
                                  borderWidth: 1
                              }]
                          },
                          options: {
                              size: 10
                          }
                      });
                  });
              } catch (error) {
                console.log(error);
              }
            });
      </script>