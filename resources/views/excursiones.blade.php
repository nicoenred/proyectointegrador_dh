@extends('layouts.plantillaAdmin')

@section('titulo')
  Excursiones
@endsection

@section('content')

<p class="h2 text-center text-uppercase"><strong>excursiones</strong></p>
<section>
    <div class="container" id="productos_home">
      <div class="row">
        @foreach ($excursion as $producto)
        <div class="col-md-3 ">
          <div class="card h-100">
            <a href=""><img class="card-img-top" src="/storage/excursiones/{{$producto->imagen}}" alt=""></a>
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

@endsection
