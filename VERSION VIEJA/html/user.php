<?php

session_start();
require_once 'controladores/helpers.php';
require_once 'bbdd/bbdd.php';
require_once 'controladores/controladorValidacionFiles.php';

$errorCarga="";

if ($_FILES) {
  $errorCarga= validarImagen($_FILES);
  if (count($errorCarga)==0) {
    $imagen=$_FILES["imagenperfil"]["tmp_name"];
    $ext = pathinfo($_FILES["imagenperfil"]["name"] , PATHINFO_EXTENSION);
    $nombre= $_SESSION["username"] ."_". $_SESSION["id"] . "." . "$ext";
    $ruta= "../images/fotosperfil/" . $nombre;

    move_uploaded_file ($imagen, $ruta);

    $consulta=$bbdd->prepare("UPDATE entre_diagonales.clientes SET imgprofile = :nombre WHERE (idCliente = :id)");
    $consulta->bindValue(":nombre",$nombre);
    $consulta->bindValue(":id", $_SESSION["id"]);
    $consulta->execute();
  }
}

function cargarImagen($bbdd){
  $cargar=$bbdd->prepare("SELECT imgprofile FROM entre_diagonales.clientes WHERE (idCliente=:id)");
  $cargar->bindValue(":id", $_SESSION["id"]);
  $cargar->execute();
  $resultados=$cargar->fetch(PDO::FETCH_ASSOC);
  foreach ($resultados as $value) {
      $cargar="$value";
    }
    return $cargar;
  }
$nombre_img=cargarImagen($bbdd);

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
  <div class="container emp-profile">
    <div class="row">
      <div class="col-md-4">
        <form action='' method='post' enctype="multipart/form-data">
          <div class="profile-img">
             <img class="img-fluid" src="../images/fotosperfil/<?=$nombre_img?>" alt=""/>
              <div class="file btn btn-lg btn-primary">
                  Cambiar Foto
              <input type="file" name="imagenperfil" value=""/>
              </div>
              <div class="btn-lg btn-primary">
                <input class="btn btn-primary" type="submit" value="Subir foto">
              </div>
                <!--
              <div class='btn btn-lg btn-primary container'>
                <input type='submit' name='Submit' value='Subir foto'/>
              </div>
            -->
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <div class="profile-head">
          <h4>
            <span> ¡Bienvenido <?php  echo $_SESSION["nombreUsuario"]; ?>!  </span>
          </h4>
          <a class="btn btn-outline-primary editarinfo" href="editUser.php" role="button">Editar información</a>
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
                    <p><?php echo $_SESSION["username"]; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Nombre</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo $_SESSION["nombreUsuario"]; ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Email</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo $_SESSION["emailUsuario"]; ?></p>
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
  <?php include_once "footer.php" ?>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
