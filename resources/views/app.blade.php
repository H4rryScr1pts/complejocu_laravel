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
  <link rel="website icon" href="/build/img/logo.png">
  {{-- <link rel="stylesheet" href="{{asset("css/app.css")}}"> --}}
  @vite("resources/css/app.css")
  <title>
    Complejo CU | @yield("titulo")
  </title>
</head>
<body>
  @yield('public')
  @yield('admin')
</body>
</html>