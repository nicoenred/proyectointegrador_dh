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
    <form method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
            <div class="file btn btn-lg btn-primary">
              Cambiar Foto
              <input type="file" name="file"/>
            </div>
          </div>
          <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Editar"/>
        </div>
        <div class="col-md-8">
          <div class="profile-head">
            <h4>
              Nombre de Usuario
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
                      <p>@usuario_ID</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Nombre</label>
                    </div>
                    <div class="col-md-6">
                      <p>Nombre Usuario</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label>Email</label>
                    </div>
                    <div class="col-md-6">
                      <p>user12345@gmail.com</p>
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
