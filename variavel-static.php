<?php
    function percorre($quilometros){
        static $total;
        $total += $quilometros;
        echo "Percorreu mais {$quilometros} do total de {$total}<br>";
    }
    percorre(100);
    percorre(200);
    percorre(50);
    echo "<hr>";

        //Passagem de parametro
    function Incrementa(&$variavel, $valor){
        $variavel += $valor;
    }
    $a = 10;
    Incrementa($a, 20);
    echo $a;