<?php

$dsn="mysql:dbname=entre_diagonales;host=127.0.0.1;port=3306";
$usuario="root";
$pass="root";


try {
  $bbdd= new PDO($dsn, $usuario, $pass);
} catch (\Exception $e) {
  var_dump($e->getMessage());
  echo "hubo un error"; exit;
}

 ?>
