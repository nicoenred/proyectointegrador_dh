@extends('layouts.app')

@section('titulo')
  Home
@endsection

@section('content')

<div class="container-fluid" id='productos_home'>  {{-- Productos --}}
    <div class='row'>
        <div class="titulo_seccion col-12">
            <ion-icon  size="large" name="send-outline">
            </ion-icon>
            <h2 class="text-lg-center">Experiencias en la ciudad</h2>
        </div>
        <div class="col-sm-12 col-md-12" id="contenedor_producto">
            @foreach ($excursion as $producto)
            <div class="col-sm-12 col-md-4"id="producto_home">
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
    </div>
    <div class="paginacion">
        {{ $excursion->links() }}
    </div>
</div>

<div class="container-fluid" id='secciones'> {{-- Productos --}}
    <div class="row">
        <div class="titulo_seccion col-12">
            <ion-icon  size="large" name="send-outline">
            </ion-icon>
            <h2 class="text-lg-center">Las zonas de la ciudad</h2>
        </div>
        <div class="col-12" style="display: flex; overflow: hidden; margin: 0px; padding: 0px">
            <div class="col-md-4 seccion">
                <h5>
                    El casco urbano
                </h5>
            </div>
            <div class="col-md-4 seccion">
                <h5>
                    Zona Norte
                </h5>
            </div>
            <div class="col-md-4 seccion">
                <h5>
                    Circuito Gastronómico
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-4" id="btn_contacto_home">
        <a href="/contacto">
            <button class="btn btn-lg" type="button"><ion-icon style="vertical-align: middle;" size="large" name="chatbubble-ellipses-outline"></ion-icon>
                Escribinos
            </button>
        </a>
    </div>
</div>




@endsection
