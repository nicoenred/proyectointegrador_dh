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
  <title>Excursion_Producto</title>
</head>
<body>
  <?php include_once "header.php" ?>


  <header id="productos">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('../images/carrousel-productos/carrousel-home-01.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <p class="h1 text-center text-uppercase"><strong>museo de ciencias naturales</strong></p>
            <button type="button" href="/listaproductos.php" class="btn btn-primary btn-lg text-center  center">
              <span> Ver más </span>

            </button>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('../images/carrousel-productos/carrousel-home-02.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <div class="container-fluid ">
              <p class="h1 text-center text-uppercase"><strong>río de la plata</strong></p>
              <button type="button" href="/listaproductos.php" class="btn btn-primary btn-lg text-center  center">
                <span> Ver más </span>

              </button>
            </div>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('../images/carrousel-productos/carrousel-home-03.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <p class="h1 text-center text-uppercase"><strong>estadio de uno</strong></p>
            <button type="button" href="/listaproductos.php" class="btn btn-primary btn-lg text-center  center">
              <span> Ver más </span>

            </button>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <section class="container-fluid" id="productlist">
    <p class="h2 text-center  text-uppercase"><strong>encontrá el recorrido que estás buscando</strong></p>
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Encontrá el tour ideal...">
          <a href="#" class="search_icon"><ion-icon size="large" name="search"></ion-icon></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        <img src="../images/excursiones/republica_ninos/01.jpg" class="img-fluid h-auto d-inline-block rounded" alt="Responsive image">
      </div>
      <div class="col-sm-12 col-md-9">
        <h3>Recorré la República de los Niños</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ullam, veniam? Aliquam sit, eum, fugit nobis, reprehenderit rerum incidunt, sed cupiditate quisquam optio impedit molestiae ex pariatur magni eius unde velit quae et officiis vitae. Beatae dolores praesentium minima quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iste corporis dolorum voluptates nam vitae error, nostrum beatae nisi ea, vel quibusdam libero consequatur molestiae veniam? Autem quis temporibus aspernatur quasi iusto facere reprehenderit repellat voluptates rem, labore nostrum sint.</p>
        <a class="btn btn-primary" href="detalleproducto.php" role="button">Reservar</a>
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
