@extends('layouts.app')

@section('titulo')
{{$user->name}}
@endsection

@section ('content')
<div class="container profile">
  <div class="row">
    <div class="col-md-4"> <!-- Imagen de pefil -->
      <div class="profile-img">
        <img class="img-fluid" src="/storage/usuarios/{{$user->imagenPerfil}}"  alt=""/>
      </div>
      <form action='/updateAvatar/{{$user->idUser}}' method='post' enctype="multipart/form-data" class='file'>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="file"  name="imagenPerfil" value='Cambiar imagen'>
        <button type="submit" class="btn btn-outline-info btn-sm">Cambiar imagen</button>
      </form>
    </div>
    <div class="col-md-8"> <!-- Usuario -->
      <div class="profile-head">
        <h4>
          <span> ¡Bienvenido {{ $user->name }} !  </span>
        </h4>
        <a class="btn btn-outline-primary editarinfo" id="editarinfo" href="/miPerfil/{{$user->idUser}}/editar" role="button">Editar información</a>
      </div>
      <div class="row">
        <div class="col-md-10">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#user-home" role="tab" aria-controls="home" aria-selected="true">Información</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Historial de compras</a>
            </li>
          </ul>
          <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="user-home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Id</label>
                </div>
                <div class="col-md-6">
                  <p> {{ $user->name }} </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Nombre</label>
                </div>
                <div class="col-md-6">
                  <p> {{ $user->name }} </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6">
                    <p> {{ $user->email }}
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                  <div class="card h-100">
                    <a href="detalleproducto.html"><img class="card-img-top" src="..\images\municipalidad.jpg" alt=""></a>
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="detalleproducto.html">Item Three</a>
                      </h4>
                      <h5>$24.99</h5>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          <script src="{{ asset('/js/entrediagonales.js') }}"></script>
@endsection
