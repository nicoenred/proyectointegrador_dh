@extends('layouts.plantillaAdmin')

@section('titulo')
    Panel de administrador
@endsection

@section('content')

    <div class="container-fluid">
      <div class="home_admin">
        <div class="col text-center">
          <img alt="entre_diagonales" src="/imagenes/marca/logo.png" />
          <h2 class="mt-3">Hola {{$admin->name}}</h2>
        </div>
        <div class="col text-center">
          <a href="{{Route('listarExcursiones')}}"><button type="button" class="btn btn-primary btn-lg">Ver excursiones</button></a>
          <a href="{{Route('cargarExcursion')}}"><button type="button" class="btn btn-primary btn-lg">Cargar excursión</button></a>
        </div>
      </div>
    </div>
@endsection

