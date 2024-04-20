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
        <div class="graficas">
          <div>
            <h1>Estacionamiento A</h1>
            <canvas id="graficaEstacionamiento1" class="grafica" width="200" height="200"></canvas>
          </div>
          <div>
            <h1>Grafica EB</h1>
            <canvas id="graficaEstacionamiento2" width="200" height="200"></canvas>
          </div>
        </div>
      </div>
@endsection
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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