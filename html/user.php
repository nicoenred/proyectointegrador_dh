<?php
  session_start();
/*
Lo mas cercano a tratar de dejar una imagen de perfil por default en caso de que el usuario no suba ninguna imagen
            <img class="img-fluid" src="../images/fotosperfil/<?php if($_FILES["imagenperfil"]["name"]) {echo "profiledefault.jpg";} else {echo "foto.jpg";}?>" alt=""/>
Pero falla y hay que clickear dos veces en cargar imagen para que la cambie efectivamente.
*/
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
    <form action='' method='post' enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">

            <img class="img-fluid" src="../images/fotosperfil/foto.jpg" alt=""/>
            <?php
            if ($_FILES){
              if ($_FILES["imagenperfil"]["error"]!=0){
               echo "Hubo un error al cargar la imagen de perfil <br>";
            }
              else {
                $ext = pathinfo($_FILES["imagenperfil"]["name"] , PATHINFO_EXTENSION);
                if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
                  echo "La imagen debe ser jpg, jpeg o png <br>";
                }

                else {
                  move_uploaded_file ($_FILES["imagenperfil"]["tmp_name"],"../images/fotosperfil/foto.jpg");
                }
              }

            }
             ?>
                <br>
                <br>
                <br>
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
        </div>
        <div class="col-md-8">
          <div class="profile-head">
            <h4>
              <span> <?php echo $_SESSION["nombreUsuario"]; ?>  </span>
            </h4>
            <h6>
              Mini bio - Lorem ipsum dolor sit.
            </h6>
          </div>
            <div class="col-md-12 p-0">
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
                      <p></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Nombre</label>
                    </div>
                    <div class="col-md-6">
                      <p><?php echo $_SESSION["username"]; ?></p>
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
                  <div class="row">
                    <div class="col-md-6">
                      <label>Celular</label>
                    </div>
                    <div class="col-md-6">
                      <p>+54 0221 151234567 </p>
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
    </form>
  </div>

  <?php include_once "footer.php" ?>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
