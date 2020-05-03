<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700|Roboto&display=swap" rel="stylesheet">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/stylesheet.css">
</head>

<body>

    <div class="row">
      <div class="col-sm-12 col-xl-7" id="excursion">
        <img src="/storage/excursiones/{{$excursion->imagen}}" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-xl-5">
        <h2 class="display-5">{{$excursion['name']}}</h2>
        <p class="lead">{{$excursion['descripcion']}}</p>
        <span>
          <a class="btn btn-primary" href='/excursion/{{$excursion->idExcursion}}/editar' role="button"><ion-icon name="cart"></ion-icon> Editar </a>
        </span>
          <form class="" action="/excursion/{{$excursion->idExcursion}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger" value="Eliminar">
          </form>
      </div>
    </div>



<body>
</html>
