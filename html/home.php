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

  <section class="container-fluid text-center p-3 m-0 oscurecer" id="home">
    <div class="row">
      <div class="col-12">
        <a href="home.php"><img src="../images/Logo/logo.png" alt="entre_diagonales"> </a>
      </div>
      <div id="titulo" class="col-12">
        <a  class="texto" href="home.php"><h1>entre <br> DIAGONALES </h1></a>
      </div>
      <div class="row p-0">
        <div class="col text-center">
          <a class="btn btn-primary btn-lg" href="listaproductos.php" role="button">Conocé nuestros recorridos</a>
        </div>
      </div>

    </section>

  <div class="container text-center" id="about">
    <h1>
     SECCION ABOUT
   </h1>
  </div>

  <div class="container-fluid" id="productos_home">
    <p class="h2 text-center text-uppercase"><strong>excursiones populares</strong></p>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.php"><img class="card-img-top" src="../images/excursiones/republica_ninos/01.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.php">Repúbica de los Niños</a>
            </h4>
            <h5>$100.00</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.php"><img class="card-img-top" src="../images/excursiones/republica_ninos/01.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.php">Repúbica de los Niños</a>
            </h4>
            <h5>$100.00</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.php"><img class="card-img-top" src="../images/excursiones/republica_ninos/01.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.php">Repúbica de los Niños</a>
            </h4>
            <h5>$100.00</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.php"><img class="card-img-top" src="../images/excursiones/republica_ninos/01.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.php">Repúbica de los Niños</a>
            </h4>
            <h5>$100.00</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.php"><img class="card-img-top" src="../images/excursiones/republica_ninos/01.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.php">Repúbica de los Niños</a>
            </h4>
            <h5>$100.00</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.php"><img class="card-img-top" src="../images/excursiones/republica_ninos/01.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.php">Repúbica de los Niños</a>
            </h4>
            <h5>$100.00</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- /.container -->
  <section class="container-fluid" id="contact-form">
    <?php  include_once "formulario-contacto.php"?>
  </section

<!-- Footer -->
  <?php include_once "footer.php" ?>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
