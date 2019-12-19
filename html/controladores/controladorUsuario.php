<?php
function armarArrayUsuario($array) {
  $usuarioParaGuardar = [
    "nombre" => trim($array['nombre']),
    "username" => $array['username'],
    "email" => $array['email'],
    "password" => password_hash($array['password'], PASSWORD_DEFAULT),
    "imagen" => ""
  ];
  return $usuarioParaGuardar;
}

?>
