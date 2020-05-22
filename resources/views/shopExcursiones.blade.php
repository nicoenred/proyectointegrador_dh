@extends('layouts.app')

@section('titulo')
  Excursiones
@endsection


@section('content')
@foreach ($excursiones as $excursion)
  <div class="row" id="productlist">
    <div class="col-sm-12 col-md-6"  id="excursion_shop">
      <img src="/storage/excursiones/{{$excursion->imagen}}" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
    </div>
    <div class="col-sm-12 col-md-6">
      <h2 class="display-5">{{$excursion->name}}</h2>
      <p class="lead">{{$excursion->descripcion}}</p>
      <p class="lead">Valor - ${{$excursion->valor}}</p>
      <span><a class="btn btn-primary" href="/add/{{$excursion->idExcursion}}" role="button"><ion-icon name="cart"></ion-icon> Agregar al Carrito</a></span>
    </div>
  </div>
@endforeach
@endsection
