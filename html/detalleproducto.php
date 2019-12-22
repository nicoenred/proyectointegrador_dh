<?php
  session_start();
  require_once 'clases/excursion.php';
  require_once 'controladores/helpers.php';

  $excursiones = file_get_contents('cargaExcursion/excursiones.json');
  $excursionesArray = json_decode($excursiones, true);
  foreach ($excursionesArray as $key => $value) {
    if ($value["id"]==$_GET["id"]){
      $class_excursion= new Excursion($_GET["id"]);
      $class_excursion->setNombre($value["nombre"]);
      $class_excursion->setId($value["id"]);
      $class_excursion->setValor($value["valor"]);
      $class_excursion->setDescripcion($value["descripcion"]);
      $class_excursion->setImagen($value["imagen"]);
    }
  }

  //$_SESSION["class_usuario"]

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <?php include_once "estilo.php" ?>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700|Roboto&display=swap" rel="stylesheet">
  <title>Excursion_Producto</title>
</head>
<body>
  <?php include_once "header.php" ?>

  <section class="container-fluid text-center p-3 m-0 h-50" id="home">
    <span> <img src="../images/Logo/logo.png" alt="entre_diagonales"> <h1>entre <br> DIAGONALES </h1></span>
  </section>

  <section id=producto class="container-fluid p-3">
    <div class="row">
      <div class="col-sm-12 col-xl-7" id="excursion">
        <img src=<?="cargaExcursion/imagenes/" . $class_excursion->getImagen() ?> class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-xl-5">
        <h2 class="display-5"><?= $class_excursion->getNombre() ?></h2>
        <p class="lead"><?= $class_excursion->getDescripcion() ?> </p>
        <span><a class="btn btn-primary" href=<?= "carro.php?id=" . $class_excursion->getId() ?> role="button"><ion-icon name="cart"></ion-icon> Agregar al Carrito</a></span>
      </div>
    </div>

  </section>

  <?php include_once "footer.php" ?>



  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
