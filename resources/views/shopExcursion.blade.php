@extends('layouts.app')

@section('titulo')
{{$excursion->name}}
@endsection

@section('content')

<section id=producto class="container-fluid p-3">
  <div class="row">
    <div class="col-sm-12 col-xl-7" id="excursion">
      <img src="/storage/excursiones/{{$excursion->imagen}}" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
    </div>
    <div class="col-sm-12 col-xl-5">
      <h2 class="display-5">{{$excursion->name}}</h2>
      <p class="lead">{{$excursion->descripcion}}</p>
      <span><a class="btn btn-primary" href="/add/{{$excursion->idExcursion}}" role="button"><ion-icon name="cart"></ion-icon> Agregar al Carrito</a></span>
    </div>
  </div>

</section>

@endsection
