<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php include_once "estilo.php" ?>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700|Roboto&display=swap" rel="stylesheet">
    <title>FAQ</title>
  </head>
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
  </section>

  <section class="container  w-80">
    <p class="h2 text-center text-uppercase m-3"><strong>preguntas frecuentes</strong></p>
    <div class="acordion" id="accordion">

      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              ¿Cuáles son los medios de pago para reservar los recorridos?
            </button>
          </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            Sólo se realizan a través de la plataforma y se pueden utilizar todas las tarjetas de crédito aceptadas por MercadoPago.com
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              ¿Cuánto tarda y cómo recibo la confirmación de mi reserva?
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            Se realiza en pocos minutos de procesarse la operación, la confirmación y detalles de la reserva llegará a través del e-mail.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              ¿Con cuánta anticipación se realizan las reservas?
            </button>
          </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
            Las reservas pueden realizarse con al menos un día de anticipación.
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" id="headingFour">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              En caso de cancelar el recorrido ¿cómo me devuelven el dinero?
            </button>
          </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
            Podes cancelar el pago del recorrido hasta dos días antes de realizarse, ponete en contacto con nosotros para que anulemos la compra y MercadoPago te reintegre el dinero.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingFive">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              ¿Dónde y cómo puedo comprobar la disponibilidad para cada recorrido?
            </button>
          </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
            Los recorridos tienen la disponibilidad actualizada, se puede vericar esto haciendo click en "Más info".
          </div>
        </div>
      </div>

    </div>
  </section>

  <?php include_once "footer.php" ?>

</body>
</html>
