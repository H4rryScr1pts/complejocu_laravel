<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
  <link rel="website icon" href="/build/img/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- <link rel="stylesheet" href="{{asset("css/app.css")}}"> --}}
  <link rel="stylesheet" href="{{asset("build/assets/app-FZoSTnfs.css")}}"/>
  @vite("resources/css/app.css")
  @vite("resources/js/app.js")
  <title>
    Complejo CU | @yield("titulo")
  </title>
  @section("style")
    
  @endsection
</head>
<body>
  @yield('public')
  @yield('admin')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{asset("build/assets/app-B0QLVBv4.js")}}"></script>
</body>
</html>