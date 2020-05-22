<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('titulo')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700|Roboto&display=swap" rel="stylesheet">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/stylesheet.css">
</head>

<body>
  <div class="container-fluid">

  <div class="row">


    <form enctype="multipart/form-data" method="post" action="/excursion/crear">

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
          <input name="name" value="{{old('nombre')}}" type="text" class="form-control" placeholder="Nombre de excursión" aria-label="Nombre de excursión" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-1-12"> <!-- Sub -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Subtitulo</span>
          </div>
          <input name="sub" value="{{old('subtitulo')}}" type="text" class="form-control" placeholder="Descripción breve" aria-label="Descripción breve" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-1-12"> <!-- Imagen -->
        <label for="release_date">Imagen</label>
        <input type="file" name="imagen" value=''>
      </div>

      <div class="col-md-1-12"> <!-- Precio -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Precio</span>
          </div>
          <input name="valor" value="{{old('precio')}}" type="text" class="form-control" placeholder="Precio" aria-label="Precio" aria-describedby="basic-addon1">
        </div>
      </div>

      <div class="col-md-1-12"> <!-- Descripcion -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Descripción</span>
          </div>
          <textarea name="descripcion" value="{{old('descripcion')}}" type="text" class="form-control" placeholder="Información de la excursión" aria-label="With textarea"></textarea>
        </div>
      </div>

      <div class="col-md-1-12"> <!-- Categoria -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Categoría</label>
          </div>
          <select name="categoria" class="custom-select" id="inputGroupSelect01">
            <option selected>Seleccionar...</option>
            @foreach ($categorias as $categoria)
              <option value="{{$categoria->idCategoria}}">{{$categoria->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <!-- Imagen principal -->
      <!--
      <div class="col-md-1-12">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Imagen principal</span>
          </div>
          <div class="custom-file">
            <input type="file" name="imgprincipal" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Buscar Imagen</label>
          </div>
        </div>
      </div>
    -->

      <button type="submit" class="btn btn-primary">Enviar</button>

      </form>

  </div>

</div>

</body>
</html>
