<?php

function pre($array) { //imprime un array con sus saaltos de linea
  echo '<pre>';
  var_dump($array);
  echo '</pre>';
}


function dd($array) { //imprime un array con sus saaltos de linea y no imporime nada mas a continuacion
  pre($array);
  exit;
}





 ?>
