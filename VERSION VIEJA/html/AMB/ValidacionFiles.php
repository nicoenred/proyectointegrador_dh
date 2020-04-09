<?php
function validarImagen($array){

  $errores=[];

  $ext = pathinfo($array["imgprincipal"]["name"] , PATHINFO_EXTENSION);

  if ($array["imgprincipal"]["error"]!=0){
      $errores["server"]="Hubo un error al cargar la imagen";
    }

  if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
      $errores["extension"]="La extensión del archivo no es válida";
    }
  return $errores;
}


?>
