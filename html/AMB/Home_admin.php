<?php

session_start();
require_once "../bbdd/bbdd.php";
require_once 'helpers.php';



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Administración del sitio</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="stylesheet_admin.css">
     <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

   </head>
   <body>

     <div class="container-fluid">
       <div class="row">
         <div class="col text-center">
           <img alt="entre_diagonales" src="../../images/Logo/logo.png" />
           <h2 class="mt-3">Hola <?= $_SESSION["username"] ?></h2>
         </div>
         <div class="col text-center">
           <a href="Listado.php"><button type="button" class="btn btn-primary btn-lg">Ver excursiones</button></a>
         </div>
         <div class="col text-center">
           <button type="button" class="btn btn-primary btn-lg"><a href="Form_Carga.php">Cargar excursión</a></button>
         </div>
         <div class="col text-center">
           <button type="button" class="btn btn-primary btn-lg">Ver perfil</button>
         </div>
         <div class="col text-center">
           <button type="button" class="btn btn-dark btn-lg">
             <a href="logout.php">Cerrar Sesion</a>
           </button>
         </div>
       </div>
     </div>


     <!-- Bootstrap core JavaScript -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
