<?php
  function imc($peso, $altura){
    return $peso / ($altura * $altura);
  }
  echo "O valor de IMC é ".number_format(imc(64, 1.72), 2, '.', ' ');
?>
