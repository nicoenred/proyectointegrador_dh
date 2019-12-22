<?php

session_start();
require_once '../controladores/helpers.php';
require_once 'controladorCarga.php';
require_once 'controladorExcursion.php';

$errorCarga="";

if ($_POST) {
  $errorCarga= validarFormulario($_POST); //Validacion del registro
  if (count($errorCarga)== 0) {
    $excursiones = file_get_contents('excursiones.json');
    $excursionesArray = json_decode($excursiones, true);
    $excursion = armarArrayExcursion($_POST);
    $excursionesArray[]=$excursion;
    file_put_contents('excursiones.json',json_encode($excursionesArray));
  }
}

if ($_FILES){
  if ($_FILES["imagenExcursion"]["error"]!=0){
    echo "Hubo un error al cargar la imagen de la excursion<br>";
  }
  else {
    $ext = pathinfo($_FILES["imagenExcursion"]["name"] , PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
      echo "La imagen debe ser jpg, jpeg o png <br>";
    }
    else {
      move_uploaded_file ($_FILES["imagenExcursion"]["tmp_name"],"imagenes/" . $_POST["id"] . "." . "$ext");
      $excursiones = file_get_contents('excursiones.json');
      $excursionesArray = json_decode($excursiones, true);
      foreach ($excursionesArray as $key => $value) {
        if ($value["nombre"]==$_POST["nombre"]) {
          $excursionesArray[$key]["imagen"]=$_POST["id"] . "." . $ext;
        }
      }
      file_put_contents('excursiones.json',json_encode($excursionesArray));
      header("Location: ../detalleproducto.php?id=" . $_POST["id"]);
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php include_once "../estilo.php" ?>
  <title>| REGISTRO |</title>

</head>
<body>

  <section class="container" id="form-registro">
    <p class="h2 text-center text-uppercase"><strong>Cargar Excursion</strong></p>
    <form action="" method="post" enctype="multipart/form-data">

      <div class="row">

        <div class="col">
          <label for="nombre">Ingresá el nombre de la excursion</label>
          <input type="text" id="nombre" name="nombre" value="<?= persistirDato($errorCarga, 'nombre') ?>" class="form-control" placeholder="Nombre completo">
          <small><?= isset($errorCarga['nombre']) ? $errorCarga['nombre'] : ""  ?></small>
        </div>

        <div class="col">
          <label for="id">Ingresá identificador</label>
          <input type="text" id="id" name="id" value="<?= persistirDato($errorCarga, 'id') ?>" class="form-control" placeholder="Palabra clave de identificacion">
          <small><?= isset($errorCarga['id']) ? $errorCarga['id'] : ""  ?></small>
        </div>

        <div class="col">
          <label for="valor">Ingresá el valor de la excursion</label>
          <input type="text" id="valor" name="valor" value="<?= persistirDato($errorCarga, 'valor') ?>" class="form-control" placeholder="Valor excursion en pesos">
          <small><?= isset($errorCarga['valor']) ? $errorCarga['valor'] : ""  ?></small>
        </div>

      </div>

      <div class="form-group">
        <label for="Descripcion">Describa brevemente la excursion</label>
        <input type="descripcion" name="descripcion" value="<?= persistirDato($errorCarga, 'descripcion') ?>" class="form-control" id="Descripcion" placeholder="Ingrese descripción">
        <smaipcionll><?= isset($errorCarga['descripcion']) ? $errorCarga['descripcion'] : ""  ?></small>
      </div>

      <div class="form-group">
          <label for="file">Subir imagen</label>
          <input type="file" name="imagenExcursion" value=""/>
      </div>


      <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
  </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>
