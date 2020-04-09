<?php
  session_start();
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
  <title>HOME</title>
</head>

<body>
  <?php include_once "header.php" ?>


  <div class="jumbotron m-0">
    <h1 class="display-4"><img src="../images/Logo/logo.png" alt="entre_diagonales">entre <strong>Diagonales</strong> /</a> </h1>
    <p class="lead">Conocé nuestra gran variedad de alternativas a la hora de <strong>recorrer y conocer la ciudad de La Plata</strong>, con el confort de nuestros transportes y el conocimiento de nuestro personal logramos que tu recorrido sea una experiencia beneficiosa y placentera</p>
    <hr class="my-4">
    <ul class="list-inline">
      <li class="list-inline-item"><ion-icon size="large" name="logo-facebook"></ion-icon></li>
      <li class="list-inline-item"><ion-icon  size="large" name="logo-twitter"></ion-icon></li>
      <li class="list-inline-item"><ion-icon  size="large" name="logo-youtube"></ion-icon></ion-icon></li>

    </ul>
    <a class="btn btn-primary" href="contact.php" role="button">Escribinos </a>
    <a href="fyq.php" role="button" class="btn btn-dark">Preguntas Frecuentes</a>
  </div>

  <?php include_once "footer.php" ?>

</body>
</html>
