<?php

function validarCarga($array) {
  $errores=[];

  if (isset($array["nombre"])) {

    if (empty($array["nombre"])){ //preguntamos por campo vacio
      $errores['nombre'] = "El campo está vacío";
    }
    elseif (strlen($array["nombre"])<3) { //preguntamos longitud
      $errores['nombre'] = "El nombre de la excursión debe tener al menos 3 caracteres";
    }

  }

  if (isset($array["subtitulo"])) {

    if (empty($array["subtitulo"])){ //preguntamos por campo vacio
      $errores['subtitulo'] = "El campo está vacío";
    }
    elseif (strlen($array["subtitulo"])<3) { //preguntamos longitud
      $errores['subtitulo'] = "La descripción breve debe tener al menos 3 caracteres";
    }

  }

  if (isset($array["precio"])) {

    if (empty($array["precio"])){ //preguntamos por campo vacio
      $errores['precio'] = "El campo está vacío";
    }

  }

  if (isset($array["descripcion"])) {

    if (empty($array["descripcion"])){ //preguntamos por campo vacio
      $errores['descripcion'] = "El campo está vacío";
    }

  }

  return $errores;

}

function persistirDato($arrayE , $string) { //Función para que los datos ingresados corerctamnente permanezcan y los no ingresados correctamente se borren. $arrayE hace referencia al array de errores
  if (isset($arrayE[$string])) {
    return "";
  }
  else {
    if (isset($_POST[$string])) {
      return $_POST[$string];
    }
  }
}



 ?>
