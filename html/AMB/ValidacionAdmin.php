<?php

function validarFormulario($array) {

  require_once "../bbdd/bbdd.php";
  global $bbdd;

  $consulta=$bbdd->prepare("SELECT * FROM entre_diagonales.admin");
  $consulta->execute();
  $resultados=$consulta->fetchAll(PDO::FETCH_ASSOC);

  $errores=[];

  //Validacion del input "email"

  if (isset($array["email"])) {

    if (empty($array["email"])){
      $errores['email'] = "El campo está vacío"; //preguntamos si email esta vacio
    }

    if (!filter_var($array["email"] , FILTER_VALIDATE_EMAIL)) { //preguntamos si NO es un mail válido a partir de filter_var per otambien con el ! al inicio
      $errores['email'] = "Tenés que ingresar un mail válido"; //preguntamos si email esta vacio
    }




  }

  //Validacion del input "password"

  if (isset($array["password"])) {

    if (empty($array["password"])){
      $errores['password'] = "El campo está vacío"; //preguntamos si pass esta vacio
    }
    elseif (strlen($array["password"])<4) { //preguntamos longitud de pass
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
