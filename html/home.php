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
          <button type="button" href="detalleproducto.php" class="btn btn-primary btn-lg text-center  center">
            <span> Conocé nuestras excursiones </span>

          </button>
        </div>
      </div>

  </section>

  <!-- Page Content -->
  <div class="TODO">


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.html"><img class="card-img-top" src="..\images\20120308120659_misteriosdelaplata.blogspot.com1.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.html">Item One</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.html"><img class="card-img-top" src="..\images\20190704-turismo-en-la-plata-749599.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.html">Item Two</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.html"><img class="card-img-top" src="..\images\municipalidad.jpg" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.html">Item Three</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.html"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.html">Item Four</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.html"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.html">Item Five</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <a href="detalleproducto.html"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="detalleproducto.html">Item Six</a>
            </h4>
            <h5>$24.99</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
          </div>
        </div>
      </div>

    </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->

</div>
<!-- /.container -->
<?php  include_once "formulario-contacto.php"?>
<!-- Footer -->
<?php include_once "footer.php" ?>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
