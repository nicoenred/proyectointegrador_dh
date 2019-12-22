<?php
function armarArrayExcursion($array) {
  $excursionParaGuardar = [
    "nombre" => trim($array['nombre']),
    "id"=> trim($array['id']),
    "valor" => $array['valor'],
    "descripcion" => $array['descripcion'],
    "imagen" => ""
  ];
  return $excursionParaGuardar;
}

?>
