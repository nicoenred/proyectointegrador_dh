@extends('layouts.app')

@section('titulo')
  Home
@endsection

@section('portada')

  <section class="container-fluid text-center p-3 m-0 oscurecer" id='home'>
    <div class="row">
      <div class="col-12">
        <a href="home"><img src="/imagenes/marca/logo.png" alt="entre_diagonales"> </a>
      </div>
      <div id="titulo" class="col-12">
        <a  class="texto" href="home"><h1> entre <br> DIAGONALES </h1></a>
      </div>
      <div class="row p-0">
        <div class="col text-center">
          <a class="btn btn-primary btn-lg" href="/directorio" role="button">Conocé nuestros recorridos</a>
        </div>
      </div>

    </section>

@endsection

@section('content')

  <div class="container-fluid">
    <div class='row' id='productos_home'>
    @foreach ($excursion as $producto)
      <div class="col-sm-12 col-md-4" id='producto_home'>
        <div class="card">
        <img src="/storage/excursiones/{{$producto->imagen}}" class="card-img-top" alt="{{$producto->name}}">
        <div class="card-body">
          <h5 class="card-title">{{$producto->name}}</h5>
          <p class="card-text">{{$producto->sub}}</p>
          <a href="/shopExcursion/{{$producto->idExcursion}}" class="btn btn-primary">Conocer más</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="paginacion">
    {{ $excursion->links() }}
  </div>
</div>



@endsection
