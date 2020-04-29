<?php
function validarImagen($array){

  $errores=[];

  $ext = pathinfo($array["imagenperfil"]["name"] , PATHINFO_EXTENSION);

  if ($array["imagenperfil"]["error"]!=0){
      $errores["server"]="Hubo un error al cargar la imagen de perfil";
    }

  if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
      $errores["extension"]="Hubo un error al cargar la imagen de perfil";
    }
  return $errores;
}


?>
