<?php
require_once '../bbdd/bbdd.php';
require_once 'helpers.php';

$consulta=$bbdd->prepare("SELECT * FROM entre_diagonales.producto");
$consulta->execute();
$resultados=$consulta->fetchAll(PDO::FETCH_ASSOC);



 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Listado de excursiones</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="stylesheet_admin.css">
     <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
   </head>
   <body>

     <header>
       <nav class="nav justify-content-end">
         <a href="Home_admin.php" class="btn btn-danger btn-md active" role="button" aria-pressed="true">
           Volver
         </a>
       </nav>
     </header>

     <div class="container">
       <?php foreach ($resultados as $resultado): ?>
           <div class="card mb-3" style="max-width: 540px;">
             <div class="row no-gutters">
               <div class="col-12">
                 <img src="../../images/excursiones/<?=$resultado["imagen_principal"]?>" class="card-img" alt=<?=$resultado["titulo"]?> >
               </div>
               <div class="col-12">
                 <div class="card-body">
                   <h5 class="card-title"><?=$resultado["titulo"]?></h5>
                   <p class="card-text"><?=$resultado["subtitulo"]?></p>
                   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

                   <!-- Editar -->

                   <button type="button" class="btn btn-primary">Editar</button>

                   <!-- Eliminar -->
                   <a href="#eliminar" role="button" class="btn btn-danger" data-toggle="modal">Eliminar</a>

                   <div id="eliminar" class="modal fade">
                     <div class="modal-dialog">
                       <div class="modal-content">
                         <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title">Borrar <?=$resultado["titulo"]?>?</h4>
                         </div>
                         <div class="modal-body">
                           <p>¿Seguro que querés borrar la excursión?</p>
                           <p class="text-warning"><small>Si lo borras, nunca podrás recuperarlo.</small></p>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                           <a href="eliminarexcursion.php"><button type="button" class="btn btn-danger">Eliminar</button></a>
                         </div>
                       </div>
                     </div>
                   </div>
                   <!-- Activar -->
                   <?php if ($resultado["estado"]==0): ?>
                     <button type="button" class="btn btn-success">Activar</button>
                   <?php else: ?>
                     <button type="button" class="btn btn-warning">Desactivar</button>
                   <?php endif; ?>
                 </div>
               </div>
             </div>
           </div>
       <?php endforeach; ?>
     </div>


     <!-- Bootstrap core JavaScript -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
