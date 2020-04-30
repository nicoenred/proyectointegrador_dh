<!DOCTYPE html>
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


<p class="h2 text-center text-uppercase"><strong>excursiones</strong></p>
<section>
    <div class="container" id="productos_home">
      <div class="row">
        @foreach ($excursion as $producto)
        <div class="col-md-6 ">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="/imagenes/excursiones/{{$producto->imagen}}" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/excursiones/{{$producto->idExcursion}}">{{$producto->name}}</a>
              </h4>
              <h5>$ {{$producto->valor}}</h5>
              <p class="card-text">{{$producto->sub}}</p>
              <a class="btn btn-danger" href="/excursiones/{{$producto->idExcursion}}" role="button">Comprar</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<footer>
<ul class="pagination justify-content-center">
  {{ $excursion->links() }}
</ul>
</footer>

</body>
</html>
