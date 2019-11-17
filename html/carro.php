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


  <section class="container-fluid text-center p-3" id="home">
    <span> <img src="../images/Logo/logo.png" alt="entre_diagonales"> <h1>entre <br> DIAGONALES </h1></span>
    <p class="lead text-muted">Caminá la ciudad como nunca antes la habías caminado</p>
  </section>

  <h2 class="text-center">Carrito</h2>
  <section class="container w-80" id="resumen_compra">

    <table class="table table-bordered">
        <thead>
          <tr class="bg-primary">
            <th scope="col">Ítem</th>
            <th scope="col">Excursion</th>
            <th scope="col">Cant. Personas</th>
            <th scope="col">$</th>
            <th scope="col">Sub total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Visita a la República de los Niños</td>
            <td>2</td>
            <td>$1000.00</td>
            <td>$2000.00</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Circuito fundacional</td>
            <td>1</td>
            <td>$500.00</td>
            <td>$500.00</td>
          </tr>
          <tr>
            <th scope="row" colspan="4">Total </th>
            <td class="bg-info"><strong>$2500.00</strong></td>
          </tr>
        </tbody>
      </table>
  </section>
  <section class="container" id="boton_comprar">
    <div class="row p-0">
      <div class="col text-center">
        <button type="button" class="btn btn-primary btn-lg text-center  center">
          <span><img src=../images\iconmonstr-shop-3-240.png width="24" height="24"></span>
            Comprar
        </button>
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
