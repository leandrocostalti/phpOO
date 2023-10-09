<?php
  $total = 0;
  function km2m1($quilometros){
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
  }
  echo 'Pecoreu '.km2m1(100).' milhas <br>';
  echo 'Pecoreu '.km2m1(200).' milhas <br>';
  echo 'Pecoreu no total '.$total.' quilometros <br>';

?>
