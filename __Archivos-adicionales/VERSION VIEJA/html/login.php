<?php
session_start();

require_once 'controladores/helpers.php';
require_once 'controladores/controladorValidacionLogin.php';
require_once "bbdd/bbdd.php";



$errorLogin = "";

if ($_POST) {
  $errorLogin= validarFormulario($_POST); //Validacion del registro

  if (count($errorLogin) == 0) {

    $login=$bbdd->prepare("SELECT * FROM entre_diagonales.clientes WHERE email LIKE ?");

    $email=$_POST["email"];
    $pass=$_POST["password"];

    $login->bindValue(1, $email);
    $login->execute();

    $resultados=$login->fetchAll(PDO::FETCH_ASSOC);


    foreach ($resultados as $user) {
        if (password_verify($_POST["password"], $user["password"])) {
          $_SESSION["emailUsuario"] = $user["email"];
          $_SESSION["nombreUsuario"]= $user["nombre"];
          $_SESSION["username"]= $user["username"];
          $_SESSION["password"]= $user["password"];
          $_SESSION["id"]= $user["idCliente"];
          if(isset($_POST['recordarme']) && $_POST['recordarme'] == 'on') {
            setcookie('emailUsuario', $user['email'], time()+60*60*24);
            setcookie('passUsuario', $user['password'], time()+60*60*24);
          }
          header("Location: home.php");
        }
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
  <?php include_once "estilo.php" ?>
  <title>| LOGIN |</title>


</head>
<?php include_once "header.php"?>
<body>
  <section class="container" id="form-login">
    <p class="h2 text-center text-uppercase"><strong>te damos la bienvenida</strong></p>

    <form action="" method="post">

      <div class="form-group">
        <label for="exampleInputEmail1">Ingresá tu dirección de correo electrónico</label>
        <input type="email" name="email" value="<?= persistirDato($errorLogin, 'email') ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small><?= isset($errorLogin['email']) ? $errorLogin['email'] : ""  ?></small>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Ingresá la contraseña</label>
        <input type="password" name="password" value="" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <small><?= isset($errorLogin['password']) ? $errorLogin['password'] : ""  ?></small>
      </div>

      <div class="form-group form-check">
        <input type="checkbox" name="recordarme" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordame</label>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

  </section>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<?php include_once "footer.php" ?>
</html>
