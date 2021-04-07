<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
  <title>@yield('title')</title>
</head>
<body>
  <div class="header">
    @include('blocks.menu')
  </div>

  <div class="content">
    @yield('content')
  </div>

  <div class="footer">
    footer 2021
  </div>
</body>
</html>