@extends('layouts.app')

@section('titulo')
  Excursiones
@endsection


@section('content')
@foreach ($excursiones as $excursion)
  <div class="row">
    <div class="col-sm-12 col-md-3">
      <img src="/storage/excursiones/{{$excursion->imagen}}" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
    </div>
    <div class="col-sm-12 col-md-9">
      <h2 class="display-5">{{$excursion->name}}</h2>
      <p class="lead">{{$excursion->descripcion}}</p>
      <span><a class="btn btn-primary" href="/add/{{$excursion->idExcursion}}" role="button"><ion-icon name="cart"></ion-icon> Agregar al Carrito</a></span>
    </div>
  </div>
@endforeach
@endsection
