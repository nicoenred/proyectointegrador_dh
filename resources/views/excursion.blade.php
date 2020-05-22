@extends('layouts.plantillaAdmin')

@section('titulo')
    {{$excursion['name']}}
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-xl-5" id="excursion">
            <img src="/storage/excursiones/{{$excursion->imagen}}" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
            <h2 class="display-5" style="margin-top: 1vh;">{{$excursion['name']}}</h2>
            <p class="lead">{{$excursion['descripcion']}}</p>
            <div class="col-12 edit-form">
                <span>
                <a class="btn btn-primary" href='/excursion/{{$excursion->idExcursion}}/editar' role="button"><ion-icon name="cart"></ion-icon> Editar </a>
                </span>
                <form class="form-inline" action="/excursion/{{$excursion->idExcursion}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
