<?php

function validarFormulario($array) {

  $errores=[];

  //Validacion del input "email"

  if (isset($array["email"])) {

    if (empty($array["email"])){
      $errores['email'] = "El campo está vacío"; //preguntamos si email esta vacio
    }

    elseif (!filter_var($array["email"] , FILTER_VALIDATE_EMAIL)) { //preguntamos si NO es un mail válido a partir de filter_var per otambien con el ! al inicio
      $errores['email'] = "Tenés que ingresar un mail válido"; //preguntamos si email esta vacio
    }

  }

  //Validacion del input "password"

  if (isset($array["password"])) {

    if (empty($array["password"])){
      $errores['password'] = "El campo está vacío"; //preguntamos si pass esta vacio
    }
    elseif (strlen($array["password"])<6) { //preguntamos longitud de pass
      $errores['password'] = "La contraseña debe tener al menos 6 caracteres";
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
