<?php

function validarFormulario($array) {

  $errores=[];
  $excursiones = file_get_contents('excursiones.json');
  $excursionesArray = json_decode($excursiones, true);

  //Validacion del input "nombre"

  if (isset($array["nombre"])) {

    if (empty($array["nombre"])){ //preguntamos si nombre esta vacio
      $errores['nombre'] = "El campo está vacío";
    }
    elseif (strlen($array["nombre"])<2) { //preguntamos longitud de nombre
      $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres";
    }

  }

  if (isset($array["id"])) {
    foreach ($excursionesArray as $key => $value) {
      if ($value["id"]==$_POST["id"]) {
        $errores['id'] = "Este id ya existe"; 
      }
    }

    if (empty($array["id"])){
      $errores['id'] = "El campo está vacío"; //preguntamos si ID esta vacio
    }
  }
  //Validacion del input "valor"

  if (isset($array["valor"])) {

    if (empty($array["valor"])){ //preguntamos si nombre esta vacio
      $errores['valor'] = "El campo está vacío";
    }
    elseif (strlen($array["valor"])<1) { //preguntamos longitud de nombre
      $errores['valor'] = "Valor insuficiente";
    }
  }

  //Validacion del input "descripcion"

  if (isset($array["descripcion"])) {

    if (empty($array["descripcion"])){
      $errores['descripcion'] = "El campo está vacío"; //preguntamos si email esta vacio
    }
    elseif (strlen($array["descripcion"])<100) { //preguntamos longitud de nombre
      $errores['descripcion'] = "Descripcion insuficiente";
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
