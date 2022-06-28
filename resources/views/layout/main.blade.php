<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('page-title')</title>

    </head>
    <body>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="../public/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">ItProger</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="../public/">Главная</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="../public/about-us/">О нас</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="../public/articles/">Все статьи</a>
      </nav>
      <a href="#" class="btn btn-outline-primary">Войти</a>
    </div>
        <div class="container">
            @yield('content')
        </div>
        
    </body>
</html>
