<?php

session_start();
require_once 'controladores/helpers.php';
require_once 'controladores/controladorValidacionLogin.php';
require_once 'controladores/controladorUsuario.php';

$errorRegistro="";

if ($_POST) {
  $errorRegistro= validarFormulario($_POST); //Validacion del registro
  if (count($errorRegistro)== 0) {
    $usuarios = file_get_contents('usuarios.json');
    $usuariosArray = json_decode($usuarios, true);

    foreach ($usuariosArray as $key => $value) {
      if ($value["email"]==$_SESSION["emailUsuario"]) {
        $usuariosArray[$key]["email"]=$_POST["email"];
        $usuariosArray[$key]["nombre"]=$_POST["nombre"];
        $usuariosArray[$key]["username"]=$_POST["username"];
        $usuariosArray[$key]["password"]=password_hash($_POST['password'], PASSWORD_DEFAULT);
        session_destroy();
        session_start();
        $_SESSION["emailUsuario"] = $_POST["email"];
        $_SESSION["nombreUsuario"]= $_POST["nombre"];
        $_SESSION["username"]= $_POST["username"];
        $_SESSION["password"]= $usuariosArray[$key]["password"];
      }
    }
    file_put_contents('usuarios.json',json_encode($usuariosArray));


    header("Location: user.php");
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
  <?php include_once "estilo.php" ?>
  <title>| EDITA TUS DATOS |</title>

</head>
<body>

  <?php include_once "header.php" ?>

  <section class="container" id="form-registro">
    <p class="h2 text-center text-uppercase"><strong>editá tus datos</strong></p>
    <form action="" method="post">

      <div class="row">

        <div class="col">
          <label for="nombre">Ingresá tu nombre completo</label>
          <input type="text" id="nombre" name="nombre" value="<?= persistirDato($errorRegistro, 'nombre') ?>" class="form-control" placeholder="Nombre completo">
          <small><?= isset($errorRegistro['nombre']) ? $errorRegistro['nombre'] : ""  ?></small>
        </div>

        <div class="col">
          <label for="username">Ingresá tu nombre de usuario</label>
          <input type="text" id="username" name="username" value="<?= persistirDato($errorRegistro, 'username') ?>" class="form-control" placeholder="Nombre de usuario">
          <small><?= isset($errorRegistro['username']) ? $errorRegistro['username'] : ""  ?></small>
        </div>

      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Ingresá tu dirección de correo electrónico</label>
        <input type="email" name="email" value="<?= persistirDato($errorRegistro, 'email') ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small><?= isset($errorRegistro['email']) ? $errorRegistro['email'] : ""  ?></small>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Ingresá la contraseña</label>
        <input type="password" name="password" value="" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <small><?= isset($errorRegistro['password']) ? $errorRegistro['password'] : ""  ?></small>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Confirmá tu contraseña</label>
        <input type="password" name="repassword" value="" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <small><?= isset($errorRegistro['repassword']) ? $errorRegistro['repassword'] : ""  ?></small>

      </div>

      <div class="form-group form-check">
        <input type="checkbox" name="recordarme" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordame</label>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
  </section>


    <?php include_once "footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  </html>
