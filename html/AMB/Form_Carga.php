<?php

require_once 'ValidacionCarga.php';
require_once 'ValidacionFiles.php';
require_once 'helpers.php';
require_once '../bbdd/bbdd.php';

$errorCarga=[];
$errorImagen=[];

if ($_POST) {
  $errorCarga=validarCarga($_POST);

  if(count($errorCarga)==0){

    if ($_FILES) {

      $errorImagen= validarImagen($_FILES);

      if(count($errorImagen)==0){
        $imagen=$_FILES["imgprincipal"]["tmp_name"];
        $ext = pathinfo($_FILES["imgprincipal"]["name"] , PATHINFO_EXTENSION);
        $nombreimg= $_POST["nombre"] . "." . "$ext";
        $ruta="../../images/excursiones/" . $nombreimg;
        move_uploaded_file ($imagen, $ruta);


        $nombre=$_POST["nombre"];
        $sub=$_POST["subtitulo"];
        $precio=$_POST["precio"];
        $descripcion=$_POST["descripcion"];
        $categoria=implode($_POST["categoria"]);


        $nuevaExcursion=$bbdd->prepare("INSERT INTO entre_diagonales.producto (idProducto, titulo, subtitulo, precio, descripcion, tag, estado, imagen_principal)  VALUES (default, ?, ?, ?, ?, ?, default, ?)");
        $nuevaExcursion->bindValue("1",$nombre);
        $nuevaExcursion->bindValue("2",$sub);
        $nuevaExcursion->bindValue("3", $precio);
        $nuevaExcursion->bindValue("4",$descripcion);
        $nuevaExcursion->bindValue("5",$categoria);
        $nuevaExcursion->bindValue("6",$nombreimg);
        $nuevaExcursion->execute();
        header('Location: Home_admin.php');
      }
    }
  }
}




?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="stylesheet_admin.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title>Carga Excursión</title>
</head>
<body>

  <header>
    <nav class="nav justify-content-end">
      <a href="Home_admin.php" class="btn btn-danger btn-md active" role="button" aria-pressed="true">
        Volver
      </a>
    </nav>
  </header>

  <div class="container-fluid">

    <div class="row">

      <form enctype="multipart/form-data" method="post" action="">

        <div class="col-md-1-12"> <!-- Nombre de excursión -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nombre de Excursión</span>
            </div>
            <input name="nombre" value="<?= persistirDato($errorCarga, 'nombre') ?>" type="text" class="form-control" placeholder="Nombre de excursión" aria-label="Nombre de excursión" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="col-md-1-12"> <!-- Sub -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Subtitulo</span>
            </div>
            <input name="subtitulo" value="<?= persistirDato($errorCarga, 'subtitulo') ?>" type="text" class="form-control" placeholder="Descripción breve" aria-label="Descripción breve" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="col-md-1-12"> <!-- Precio -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Precio</span>
            </div>
            <input name="precio" value="<?= persistirDato($errorCarga, 'precio') ?>" type="text" class="form-control" placeholder="Precio" aria-label="Precio" aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="col-md-1-12"> <!-- Descripcion -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Descripción</span>
            </div>
            <textarea name="descripcion" value="<?= persistirDato($errorCarga, 'descripcion') ?>" type="text" class="form-control" placeholder="Información de la excursión" aria-label="With textarea"></textarea>
          </div>
        </div>

        <div class="col-md-1-12"> <!-- Categoria -->
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Categoría</label>
            </div>
            <select name="categoria" class="custom-select" id="inputGroupSelect01">
              <option selected>Seleccionar...</option>
              <option value="casco_urbano">Carco Urbano</option>
              <option value="zona_norte">Zona Norte</option>
              <option value="zona_oeste">Zona Oeste</option>
              <option value="rio">Río de La Plata</option>
            </select>
          </div>
        </div>

        <div class="col-md-1-12"> <!-- Imagen principal -->
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

        <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

    </div>

  </div>

</body>
</html>
