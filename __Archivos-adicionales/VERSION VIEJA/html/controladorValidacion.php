<?php

include_once 'controladores/helpers.php';


function validarFormulario($array) {
  include 'bbdd/bbdd.php';
  $errores=[];
  $consulta=$bbdd->prepare("SELECT * FROM entre_diagonales.clientes");
  $consulta->execute();
  $resultados=$consulta->fetchAll(PDO::FETCH_ASSOC);



  //Validacion del input "nombre"

  if (isset($array["nombre"])) {

    if (empty($array["nombre"])){ //preguntamos si nombre esta vacio
      $errores['nombre'] = "El campo está vacío";
    }
    elseif (strlen($array["nombre"])<2) { //preguntamos longitud de nombre
      $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres";
    }

  }

  //Validacion del input "nombre de usuario"

  if (isset($array["username"])) {

    if (empty($array["username"])){ //preguntamos si nombre esta vacio
      $errores['username'] = "El campo está vacío";
    }
    elseif (strlen($array["username"])<4) { //preguntamos longitud de nombre
      $errores['username'] = "Tu nombre debe tener al menos 4 caracteres";
    }
    foreach ($resultados as $usuario) {
      if ($usuario["username"]==$array["username"]) {
        $errores['username']="Este username ya existe";
      }
    }

  }

  //Validacion del input "email"

  if (isset($array["email"])) {

    if (empty($array["email"])){
      $errores['email'] = "El campo está vacío"; //preguntamos si email esta vacio
    }

    elseif (!filter_var($array["email"] , FILTER_VALIDATE_EMAIL)) { //preguntamos si NO es un mail válido a partir de filter_var per otambien con el ! al inicio
      $errores['email'] = "Tenés que ingresar un mail válido"; //preguntamos si email esta vacio
    }

    foreach ($resultados as $usuario) {
      if ($usuario["email"]==$array["email"]) {
        $errores['email']="Este email ya existe";
      }
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

  //Validacion del input "repassword"

  if (isset($array["repassword"])) {

    if (empty($array["repassword"])){
      $errores['repassword'] = "El campo está vacío"; //preguntamos si pass esta vacio
    }

    if ($array["repassword"] != $array["password"]) {
      $errores['repassword'] = "Las contraseñas deben coincidir";
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
