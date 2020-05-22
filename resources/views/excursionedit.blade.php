@extends('layouts.plantillaAdmin')

@section('titulo')
    Editar
@endsection

@section('content')

<div class="container-fluid">
  <div class="row">
      <p class="h2 text-uppercase"><strong>editar excursion: {{$excursion->name}}</strong></p>
      <div class="col-10">

          <form enctype="multipart/form-data" method="post" action="/excursion/{{$excursion->idExcursion}}">
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            @if (count($errors) > 0)
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            {{ csrf_field() }}
            <div class="col-md-1-12"> <!-- Nombre de excursión -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Nombre de Excursión</span>
                </div>
                <input name="name" value="{{$excursion->name}}" type="text" class="form-control" placeholder="Nombre de excursión" aria-label="Nombre de excursión" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="col-md-1-12"> <!-- Sub -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Subtitulo</span>
                    </div>
                    <input name="sub" value="{{$excursion->sub}}" type="text" class="form-control" placeholder="Descripción breve" aria-label="Descripción breve" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="col-md-1-12">
                <div class="input-group mb-3"> <!-- Imagen -->
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Imagen</span>
                    </div>
                    <div class="custom-file">
                    <input type="file" name="imagen" value='' class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" id="buscar" for="inputGroupFile01">Seleccionar archivo</label>
                    </div>
                </div>
            </div>

            <div class="col-md-1-12"> <!-- Precio -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Precio</span>
                </div>
                <input name="valor" value="{{$excursion->valor}}" type="text" class="form-control" placeholder="Precio" aria-label="Precio" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="col-md-1-12"> <!-- Descripcion -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Descripción</span>
                </div>
                <textarea name="descripcion" value="{{$excursion->descripcion}}" type="text" class="form-control" placeholder="Información de la excursión" aria-label="With textarea"></textarea>
              </div>
            </div>

            <div class="col-md-1-12"> <!-- Categoria -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Categoría</label>
                </div>
                <select name="categoria" class="custom-select" id="inputGroupSelect01">
                  <option value=" " selected></option>
                  @foreach ($categorias as $categoria)
                    <option value="{{$categoria->idCategoria}}">{{$categoria->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
      </div>
    </div>
</div>

@endsection

