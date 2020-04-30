<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administración del sitio</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/stylesheet_admin.css">

  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col text-center">
          <img alt="entre_diagonales" src="/imagenes/marca/logo.png" />
          <h2 class="mt-3">Hola {{$admin->name}}</h2>
        </div>
        <div class="col text-center">
          <a href="{{Route('listarExcursiones')}}"><button type="button" class="btn btn-primary btn-lg">Ver excursiones</button></a>
        </div>
        <div class="col text-center">
          <a href="{{Route('cargarExcursion')}}"><button type="button" class="btn btn-primary btn-lg">Cargar excursión</button></a>
        </div>
        <div class="col text-center">
          <button type="button" class="btn btn-primary btn-lg">Ver perfil</button>
        </div>
        <div class="col text-center">
          <a class="btn btn-dark btn-lg" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Cerrar Sesión') }}
          </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        </div>
      </div>
    </div>
  </body>
</html>
