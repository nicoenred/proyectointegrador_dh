@extends('layouts.app')

@section('titulo')
  Home
@endsection

@section('portada')

  <section class="container-fluid text-center p-3 m-0 oscurecer" id='home'>
    <div class="row">
      <div class="col-12">
        <a href="home.php"><img src="/imagenes/marca/logo.png" alt="entre_diagonales"> </a>
      </div>
      <div id="titulo" class="col-12">
        <a  class="texto" href="home.php"><h1> entre <br> DIAGONALES </h1></a>
      </div>
      <div class="row p-0">
        <div class="col text-center">
          <a class="btn btn-primary btn-lg" href="listaproductos.php" role="button">Conocé nuestros recorridos</a>
        </div>
      </div>

    </section>

@endsection

@section('excursiones')
  @yield('excursion') 
@endsection
