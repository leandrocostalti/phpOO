<?php
    /*Tipos de Dados - Objeto*/

    class Computador{
      public $cpu;
      function ligar(){
        echo "Ligando computador a {$this->cpu}...";
      }
    }

    $obj = new Computador;
    $obj->cpu = "500Mhz";
    $obj->ligar();
    echo "<hr>";
?>
